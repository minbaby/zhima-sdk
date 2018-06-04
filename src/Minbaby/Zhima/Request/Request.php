<?php

namespace Minbaby\Zhima\Request;

abstract class Request
{
    protected $apiParas = array();
    protected $fileParas = array();
    protected $apiVersion="1.0";
    protected $scene;
    protected $channel;
    protected $platform;
    protected $extParams;
    
    public function __toString()
    {
        return json_encode($this);
    }
    
    /**
     * @return array
     */
    public function getApiParas()
    {
        return $this->apiParas;
    }
    
    /**
     * @return array
     */
    public function getFileParas()
    {
        return $this->fileParas;
    }
    
    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }
    
    /**
     * @return mixed
     */
    public function getScene()
    {
        return $this->scene;
    }
    
    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
    
    /**
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    
    /**
     * @return mixed
     */
    public function getExtParams()
    {
        return $this->extParams;
    }
    
    /**
     * @param array $apiParas
     * @return Request
     */
    public function setApiParas($apiParas)
    {
        $this->apiParas = $apiParas;
        return $this;
    }
    
    /**
     * @param array $fileParas
     * @return Request
     */
    public function setFileParas($fileParas)
    {
        $this->fileParas = $fileParas;
        return $this;
    }
    
    /**
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }
    
    /**
     * @param mixed $scene
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
    }
    
    /**
     * @param mixed $channel
     * @return Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    
    /**
     * @param mixed $platform
     * @return Request
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }
    
    /**
     * @param mixed $extParams
     * @return Request
     */
    public function setExtParams($extParams)
    {
        $this->extParams = $extParams;
        return $this;
    }
    
    abstract public function getApiMethodName();
}
