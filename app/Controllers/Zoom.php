<?php namespace App\Controllers;

class Zoom extends BaseController
{
    private $tokenPath = __DIR__ . DIRECTORY_SEPARATOR . 'token.json';

	public function authentication()
	{
        try
        {
            $zoom = new \Daycry\Zoom\Zoom();
            $token = $zoom->authentication();
        
            if( !empty( $token ) )
			{
				write_file( $this->tokenPath, json_encode( $token ) );
			}

        } catch ( \League\OAuth2\Client\Provider\Exception\IdentityProviderException $e )
        {
            die( $e->getMessage() );
    
        }catch ( \Daycry\Zoom\Exceptions\ExceptionInterface $e)
		{
            die( $e->getMessage() );
        }
	}

	public function refresh()
	{
		try
		{
			$content = file_get_contents( $this->tokenPath );
			$token = json_decode( $content, true );
			
			$zoom = new \Daycry\Zoom\Zoom();
			$zoom->setAccessToken( $token );

			$response = $zoom->refreshAccessToken();

			if( !empty( $response ) )
			{
                write_file( $this->tokenPath, $response );
            }
            
		}catch ( \League\OAuth2\Client\Provider\Exception\IdentityProviderException $e )
		{
            die( $e->getMessage() );
            
		}catch( \Daycry\Zoom\Exceptions\ZoomException $e )
        {
            die( $e->getMessage() );
        }
    }
    
    public function getMeetingsForEmpty()
	{
		try
        {
            $this->refresh();
            $content = file_get_contents( $this->tokenPath );
			$token = json_decode( $content, true );
			
			$zoom = new \Daycry\Zoom\Zoom();
			$zoom->setAccessToken( $token );

			$response = $zoom->request( 'GET', 'users/{userId}/meetings?type=live' );

            if( $response )
            {
                if( is_array( $response ) && isset( $response[ 'meetings' ] ) )
                {
                    foreach( $response[ 'meetings' ] as $meeting )
                    {
                        if( intval( strtotime( $meeting[ 'start_time'] ) ) + ( intval( $meeting[ 'duration'] ) * 60 ) <= strtotime( date( 'Y-m-d H:i:s' ) ) )
                        {
                            //change status of meeting and block
                            $status = $zoom->request( 'PUT', 'meetings/' . $meeting[ 'id' ] . '/status', [ 
                                'headers' => array( 'Content-Type' => 'application/json' ), 
                                'body' => json_encode( array( 'action' => 'end' ) ) 
                            ]);

                            //empty room
                            $emptyRoom = $zoom->request( 'PATCH', 'meetings/' . $meeting[ 'id' ], [ 
                                'headers' => array( 'Content-Type' => 'application/json' ), 
                                'body' => json_encode( array( 'settings' => array( 'waiting_room' => true, 'join_before_host' => false ) ) )
                            ]);

                        }
                    }
                }
            }

		}catch ( \League\OAuth2\Client\Provider\Exception\IdentityProviderException $e )
		{
            die( $e->getMessage() );
            
        }catch( \Daycry\Zoom\Exceptions\ZoomException $e )
        {
            die( $e->getMessage() );
        }
    }

    public function getMeetingsForEnable()
	{
		try
        {
            $this->refresh();
            $content = file_get_contents( $this->tokenPath );
			$token = json_decode( $content, true );
			
			$zoom = new \Daycry\Zoom\Zoom();
			$zoom->setAccessToken( $token );

			$response = $zoom->request( 'GET', 'users/{userId}/meetings?type=upcoming' );

            if( $response )
            {
                if( is_array( $response ) && isset( $response[ 'meetings' ] ) )
                {
                    foreach( $response[ 'meetings' ] as $meeting )
                    {
                        if( strtotime( '-1 minutes', time() ) < strtotime( $meeting[ 'start_time'] ) && strtotime( $meeting[ 'start_time'] ) <= time() )
                        {
                            //set conf
                            $setRoom = $zoom->request( 'PATCH', 'meetings/' . $meeting[ 'id' ], [ 
                                'headers' => array( 'Content-Type' => 'application/json' ), 
                                'body' => json_encode( array( 'settings' => array( 'waiting_room' => false, 'join_before_host' => true ) ) )
                            ]);
                        }
                    }
                }
            }

		}catch ( \League\OAuth2\Client\Provider\Exception\IdentityProviderException $e )
		{
            die( $e->getMessage() );
            
        }catch( \Daycry\Zoom\Exceptions\ZoomException $e )
        {
            die( $e->getMessage() );
        }
	}
	//--------------------------------------------------------------------
}
