<?php

/**
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Invoice;

/**
 * For a refunded invoice, this object will contain the details of executed refunds for the corresponding invoice.
 */
class RefundInfo
{
    protected $supportRequest;
    protected $currency;
    protected $amounts;

    public function __construct()
    {
    }

    /**
     * Gets support request
     *
     * For a refunded invoice, this field will contain the refund requestId once executed.
     *
     * @return string the support request
     */
    public function getSupportRequest()
    {
        return $this->supportRequest;
    }

    /**
     * Sets support request
     *
     * For a refunded invoice, this field will contain the refund requestId once executed.
     *
     * @param string $supportRequest the support request
     */
    public function setSupportRequest(string $supportRequest)
    {
        $this->supportRequest = $supportRequest;
    }

    /**
     * Gets currency
     *
     * For a refunded invoice, this field will contain the base currency selected for the refund.
     * Typically the same as the invoice currency.
     *
     * @return string the currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets currency
     *
     * For a refunded invoice, this field will contain the base currency selected for the refund.
     * Typically the same as the invoice currency.
     *
     * @param string $currency the currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * Gets amounts
     *
     * For a refunded invoice, this object will contain the crypto currency amount
     * refunded by BitPay to the consumer (in the selected transactionCurrency)
     * and the equivalent refunded amount from the invoice in the given currency
     * (thus linked to the amount debited from the merchant account to cover the refund)
     *
     * @return array the amounts
     */
    public function getAmounts()
    {
        return $this->amounts;
    }

    /**
     * Set amounts
     *
     * For a refunded invoice, this object will contain the crypto currency amount
     * refunded by BitPay to the consumer (in the selected transactionCurrency)
     * and the equivalent refunded amount from the invoice in the given currency
     * (thus linked to the amount debited from the merchant account to cover the refund)
     *
     * @param array $amounts the amounts
     */
    public function setAmounts(array $amounts)
    {
        $this->amounts = $amounts;
    }

    /**
     * Gets Refund info as array
     *
     * @return array refund info as array
     */
    public function toArray()
    {
        $elements = [
            'supportRequest' => $this->getSupportRequest(),
            'currency'       => $this->getCurrency(),
            'amounts'        => $this->getAmounts(),
        ];

        foreach ($elements as $key => $value) {
            if (empty($value)) {
                unset($elements[$key]);
            }
        }

        return $elements;
    }
}
