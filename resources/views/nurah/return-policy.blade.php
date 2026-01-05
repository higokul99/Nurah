@extends('nurah.layouts.app')

@section('title', 'Return & Refund Policy - Nurah Perfumes')

@push('styles')
<style>
    .policy-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 0 20px;
    }
    
    .policy-title {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
        color: var(--black);
    }
    
    .policy-content h2 {
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        margin-top: 30px;
        margin-bottom: 15px;
        color: var(--black);
        font-weight: 600;
    }
    
    .policy-content p {
        margin-bottom: 15px;
        line-height: 1.6;
        color: var(--text);
    }
    
    .policy-content ul {
        margin-bottom: 15px;
        padding-left: 20px;
    }
    
    .policy-content li {
        margin-bottom: 10px;
        color: var(--text);
    }
</style>
@endpush

@section('content')
<div class="policy-container">
    <h1 class="policy-title">Return & Refund Policy</h1>
    
    <div class="policy-content">
        <p>We want you to love your Nurah Perfumes experience. However, if you are not entirely satisfied with your purchase, we are here to help.</p>

        <h2>Returns</h2>
        <p>You have <strong>7 calendar days</strong> to return an item from the date you received it.</p>
        <p>To be eligible for a return:</p>
        <ul>
            <li>Your item must be unused and in the same condition that you received it.</li>
            <li>Your item must be in the original packaging, including the box and plastic wrapping.</li>
            <li>You needs to provide the receipt or proof of purchase.</li>
        </ul>

        <h2>Damaged or Defective Items</h2>
        <p>If you receive a damaged or defective product, please notify us within 24 hours of delivery. We will arrange a replacement or refund immediately at no extra cost to you.</p>

        <h2>Refunds</h2>
        <p>Once we receive your item, we will inspect it and notify you that we have received your returned item. We will immediately notify you on the status of your refund after inspecting the item.</p>
        <p>Since we operate on a <strong>Cash on Delivery (COD)</strong> basis, refunds will be processed via:</p>
        <ul>
            <li><strong>Bank Transfer (NEFT/IMPS):</strong> You will need to provide your bank account details.</li>
            <li><strong>UPI Transfer:</strong> Refund directly to your UPI ID.</li>
        </ul>
        <p>Approved refunds are typically processed within 5-7 business days.</p>

        <h2>Shipping for Returns</h2>
        <p>If the return is due to our error (wrong item sent, damaged product), we will arrange a reverse pickup for free.</p>
        <p>If you are returning an item for personal reasons (e.g., change of mind), you will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable.</p>

        <h2>Contact Us</h2>
        <p>If you have any questions on how to return your item to us, contact us via email at <a href="mailto:support@nurahperfumes.com">support@nurahperfumes.com</a>.</p>
    </div>
</div>
@endsection
