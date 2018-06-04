<?php
/**
 * ZHIMA API: zhima.credit.report.visa.get request
 *
 * @author auto create
 * @since 1.0, 2017-07-13 18:39:47
 */
namespace Minbaby\Zhima\Request;

class ZhimaCreditReportVisaGetRequest extends Request
{
    /**
     * 芝麻会员在商户端的身份标识
     **/
    private $openId;
    
    /**
     * 产品码
     **/
    private $productCode;
    
    /**
     * 商户传入的业务流水号
     **/
    private $transactionId;

    
    public function setOpenId($openId)
    {
        $this->openId = $openId;
        $this->apiParas["open_id"] = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        $this->apiParas["product_code"] = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        $this->apiParas["transaction_id"] = $transactionId;
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function getApiMethodName()
    {
        return "zhima.credit.report.visa.get";
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
