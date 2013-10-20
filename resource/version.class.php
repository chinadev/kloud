<?php
namespace Tonic;
/**
 * TestResource
 * @uri /version/:idhash
 */
class VersionResource extends Resource {
 
    /**
     * @method GET
     */
    function version($request, $idhash){
        $response = new Response($request);
        $response->code = Response::OK;
        
        //Open up a connection to our snippet store
       	$data = array( 'version' => kloud_version() , 'site' => c('site_name') , 'key' => $idhash , 'visit_time' => date("Y-m-d H:i:s") );
 
        //Set the response body to be our encoded array.
        $response->body = json_encode($data);
 
        return $response;
    }
}