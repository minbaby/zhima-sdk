<?php
/**
 * ZHIMA API: zhima.data.feedbackurl.query request
 *
 * @author auto create
 * @since 1.0, 2016-09-08 08:34:08
 */
namespace Minbaby\Zhima\Request;

class ZhimaDataFeedbackurlQueryRequest extends Request
{
    /**
     *
     **/
    private $merchantId;

    
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        $this->apiParas["merchant_id"] = $merchantId;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function getApiMethodName()
    {
        return "zhima.data.feedbackurl.query";
    }

    public function setScene($scene)
    {
        $this->scene=$scene;
    }

    public function getScene()
    {
        return $this->scene;
    }
    
    public function setChannel($channel)
    {
        $this->channel=$channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }
    
    public function setPlatform($platform)
    {
        $this->platform=$platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setExtParams($extParams)
    {
        $this->extParams=$extParams;
    }

    public function getExtParams()
    {
        return $this->extParams;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }
    
    public function getFileParas()
    {
        return $this->fileParas;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion=$apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }
}
