@extends('nurah.layouts.app')

@section('title', 'Shipping Policy - Nurah Perfumes')

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

    .highlight {
        font-weight: 700;
        color: var(--black);
    }
</style>
@endpush

@section('content')
<div class="policy-container">
    <h1 class="policy-title">Shipping Policy</h1>
    
    <div class="policy-content">
        <p>At Nurah Perfumes, we strive to deliver your exclusive fragrances with the utmost care and efficiency. Please review our shipping policy below.</p>

        <h2>Delivery Areas</h2>
        <p>We deliver across India. Whether you are in a metro city or a remote town, we ensure your order reaches you safely.</p>

        <h2>Payment Methods</h2>
        <p>Currently, we exclusively support <span class="highlight">Cash on Delivery (COD)</span> for all orders placed through our website. You can pay for your order in cash at the time of delivery.</p>

        <h2>Shipping Charges</h2>
        <p>We offer <strong>Free Shipping</strong> on all orders across India. There are no hidden charges or extra fees for delivery.</p>

        <h2>Delivery Timelines</h2>
        <p>Our standard delivery timelines are as follows:</p>
        <ul>
            <li><strong>Metro Cities:</strong> 3-5 business days</li>
            <li><strong>Rest of India:</strong> 5-7 business days</li>
        </ul>
        <p>Please note that delivery times may vary slightly due to public holidays, extreme weather conditions, or operational challenges.</p>

        <h2>Order Tracking</h2>
        <p>Once your order is dispatched, you will receive a tracking link via SMS or Email. You can use this link to track the real-time status of your shipment.</p>

        <h2>Damaged or Tampered Packages</h2>
        <p>If you receive a package that appears to be tampered with or damaged, please <strong>do not accept delivery</strong>. Contact our support team immediately at <a href="mailto:support@nurahperfumes.com">support@nurahperfumes.com</a> or via our Contact Us page.</p>
    </div>
</div>
@endsection
