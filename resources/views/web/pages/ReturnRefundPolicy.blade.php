@extends('web.layouts.master')


@section('header')
    @include('web.includes.pageHeader')
@endsection

@section('content')
    <section class="return-policy-section">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Returns Policy</h1>
                <p class="pp-desc">
                    If your product is damaged, defective, incorrect or incomplete at the time of delivery, please raise a return request on Boichitro website. Return request must <br>be raised within 7 days for Boichitro shop or non-Boichitro shop items from the date of delivery
                </p>

                <p class="pp-desc pp-desc-bottom">Valid reasons to return an item
                </p>

                <ul>
                    <li>Delivered product is damaged (physically destroyed or broken) / defective.
                    </li>
                    <li>
                        Delivered product is incomplete (has missing items and/or accessories)
                    </li>
                    <li>
                        Delivered product is incorrect (wrong product/size/colour, fake item, or expired)
                    </li>
                    <li>
                        Delivered product is does not match product description or picture ( product not as advertised)
                    </li>
                    <li>
                        Delivered product does not fit. (size is unsuitable)
                    </li>
                </ul>
                <p class="pp-desc">Conditions for Returns</p>
                <ul>
                    <li>The product must be unused, unworn, unwashed and without any flaws. For fashion products, products may be tried on to see if the item fits. This will still be considered as unworn.
                    </li>
                    <li>
                        The product must include the original tags, user manuals, warranty cards, freebies, invoice and accessories.
                    </li>
                    <li>
                        The product must be returned in the original and undamaged manufacturer's packaging/box. If the product was delivered in Boichitro packaging/box, the same packaging/box should be returned. Do not put tape or stickers directly on the manufacturer's packaging / box.<br><br>
                        <strong>NOTE:</strong> It is important to indicate the Order Number and Return Tracking Number on your return package to avoid any inconvenience/delay in your return process.
                        While handing over your package to Pickup Agent, please collect the Boichitro Return Acknowledgment paper and reserve it for future reference.

                    </li>
                </ul>
                <p>If your returned item does not meet the above requirements, we reserve the right to reject any request for a refund.
                </p>
                <p><strong>Note:</strong> If your return request has been rejected, the item will be delivered back to you between 6-8 days. Item will be sent to scrap after three (3) failed delivery attempts and no refund will be given.
                </p>
                <p class="pp-desc">
                    How to return a products
                </p>
                <ul>
                    <li>Sign in to your Boichitro Account, click on “My Account” from bottom.
                    </li>
                    <li>
                        Select the “My Order” section and click on the View all.
                    </li>
                    <li>
                        Choose the item you want to return and click on “initiate return”
                    </li>
                    <li>
                        Please select your desired refund method.
                    </li>
                    <li>
                        Fill in the Return Form along with the available return options (pickup/ Courier Service company)
                        <table class="table mt-5">
                            <thead>
                              <tr>
                                <td class="text-center">Delivery Mode</td>
                                <td class="text-center">Return Modality</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center">Doorstep Delivery</td>
                                <td class="text-center">Pickup/Courier Service company</td>
                              </tr>
                            </tbody>
                          </table>
                    </li>
                    <li>
                        **Selecting otherwise, might result in return cancellation
                    </li>
                    <li>Pack your return package securely, with the product in the original and undamaged manufacturer's packaging as delivered to you. Write your order number & return tracking number clearly on the outer side of the package.
                    </li>
                    <li>Head to your nearest  Courier Service company or wait for collection by our pick-up service. While handing over your package to Pickup Agent, please collect the Boichitro Return Acknowledgment paper and reserve it for future reference.
                    </li>
                    <li>Make sure you have written your order number and return tracking number on your package. You can view your return tracking number as soon as you have filled the Online Return Form and logged your return request.
                    </li>
                    <li>Note: In the case of returning the products through the pickup agent or other courier, the cost of return shipping shall be borne by the buyers.
                    </li>
                </ul>
                <p class="pp-desc">
                    Conditions for Returns
                </p>
                <ul>
                    <li>The product must be unused, unworn, unwashed and without any flaws. Fashion products can be tried on to see if they fit and will still be considered unworn. If a product is returned to us in an inadequate condition, we reserve the right to send it back to you.
                    </li>
                    <li>The product must include the original tags, user manual, warranty cards, freebies and accessories.
                    </li>
                    <li>The product must be returned in the original and undamaged manufacturer packaging / box. If the product was delivered in a second layer of Boichitro packaging, it must be returned in the same condition with return shipping label attached. Do not put tape or stickers on the manufacturers box.
                    </li>
                    <p><strong>Note:</strong> It is important to indicate the order number and return tracking number on your return package to avoid any inconvenience/delay in process of your return.
                    </p>
                    <p>Note: In the case of returning the products through the pickup agent or other courier, the cost of return shipping shall be borne by the buyers.
                    </p>
                </ul>
                <h1 class="text-center">Refund</h1>
                <ul class="item-2">
                    <li>The processing time of your refund depends on the type of refund and the payment method you used.
                    </li>
                    <li>The refund period / process starts when Boichitro has processed your refund according to your refund type.
                    </li>
                    <li>The refund amount covers the item price and shipping fee for your returned product.
                    </li>
                </ul>
                <p class="pp-desc">Refund Types</p>
                <p>Boichitro will process your refund according to the following refund types</p>
                <ul class="item-2">
                    <li>Refund from returns - Refund is processed once your item is returned to the warehouse and QC is completed (successful). To learn how to return an item, read our Return Policy.</li>
                    <li>Refunds from cancelled orders - Refund is automatically triggered once cancelation is successfully processed.</li>
                    <li>Refunds from failed deliveries - Refund process starts when the item has reached the seller. Please take note that this may take more time depending on the area of your shipping address. Screen reader support enabled.</li>

                    <table class="table mt-5">
                        <thead>
                          <tr>
                            <td class="text-center">Debit or Credit Card</td>
                            <td class="text-center">Debit or Credit Card Payment Reversal</td>
                            <td class="text-center">15 working days</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">Rocket (Wallet DBBL)</td>
                            <td class="text-center">Mobile Wallet Reversal / Rocket</td>
                            <td class="text-center">7 working days</td>
                          </tr>
                          <tr>
                            <td class="text-center">Nagad</td>
                            <td class="text-center">Mobile Wallet Reversal / Nagad</td>
                            <td class="text-center">10 working days</td>
                          </tr>
                          <tr>
                            <td class="text-center">bKash</td>
                            <td class="text-center">Mobile Wallet Reversal / bKash</td>
                            <td class="text-center">10 working days</td>
                          </tr>
                        </tbody>
                      </table>
                </ul>
                <p><strong>Note:</strong> Maximum refund timeline excludes weekends and public holidays.</p>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <td scope="col" class="text-center">Modes of Refund</td>
                        <td scope="col" class="text-center">Description</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">Bank Deposit</td>
                        <td class="text-center">The bank account details provided must be correct. The account must be active and should hold some balance.</td>
                      </tr>
                      <tr>
                        <td class="text-center">Debit Card or Credit Card</td>
                        <td class="text-center">If the refunded amount is not reflecting in your card statement after the refund is completed and you have received a notification by Boichitro, please contact your personal bank.</td>
                      </tr>
                      <tr>
                        <td class="text-center">bKash / Rocket / Nagad Mobile Wallet</td>
                        <td class="text-center">Similar to bank deposit, the amount will be refunded to the same mobile account details which you inserted at the time of payment.</td>
                      </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
