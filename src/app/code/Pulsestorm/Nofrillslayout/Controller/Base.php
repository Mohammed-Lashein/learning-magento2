<?php

namespace Pulsestorm\Nofrillslayout\Controller;
use Magento\Framework\App\Action\HttpGetActionInterface;

abstract class  Base implements  HttpGetActionInterface{
    /* It is important that this base class has the constructor declared even if it
    is not empty, so that the extending classes are able to call it (either directly
    or with the help of the obj manager) */
    public function __construct(){}
    public function loadXmlFromSampleXmlFolder($path)
{
    $path = realpath(__DIR__) . '/../sample-xml/'  . $path;
    //using the hated error surpression operator
    //to avoid xsi:type warnings from simple XML
    @$xml = simplexml_load_file($path);
    if(!$xml)
    {
        throw new \Exception("Could not load valid XML from $path");
    }
    // debugging
    // echo "<pre>";
    // print_r($xml);
    // echo "</pre>";
    return str_replace('<?xml version="1.0"?>', '', $xml->asXml());
}
public function execute(){}
}
