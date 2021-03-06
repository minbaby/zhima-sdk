<?php
/**
 * ZHIMA API: zhima.customer.ep.certification.query request
 *
 * @author auto create
 * @since 1.0, 2018-03-05 11:09:17
 */
namespace Minbaby\Zhima\Request;

class ZhimaCustomerEpCertificationQueryRequest extends Request
{
    /**
     * 一次认证的唯一标识，在商户调用认证初始化接口的时候获取
     **/
    private $bizNo;

    
    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;
        $this->apiParas["biz_no"] = $bizNo;
    }

    public function getBizNo()
    {
        return $this->bizNo;
    }

    public function getApiMethodName()
    {
        return "zhima.customer.ep.certification.query";
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
