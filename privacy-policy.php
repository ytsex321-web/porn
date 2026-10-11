<?php
$page_title = 'Privacy Policy';
$page_desc = 'PornProxy privacy policy: what data we collect (and what we never store) when you use our free porn proxy.';
$page_canonical = 'privacy-policy.php';
include __DIR__ . '/inc/header.php';
?>
<div class="page-hero"><div class="wrap"><h1>Privacy Policy</h1><p>Last updated: October 2026. Short version: we don't track what you unblock.</p></div></div>
<section class="section"><div class="wrap legal">
<h2>What we collect</h2>
<p>Almost nothing. PornProxy does not require accounts, so we hold no names, emails, or passwords. Our servers process standard web-server logs (IP address, timestamp, requested page) for security and abuse prevention, retained briefly and never sold.</p>
<h2>What we never store</h2>
<ul>
<li><strong>Your proxied browsing history.</strong> The landing page keeps no list of URLs you enter - no "recently visited" list, no localStorage history, no tracking cookies.</li>
<li><strong>Account data.</strong> There are no accounts, so there is nothing to leak.</li>
</ul>
<h2>Cookies</h2>
<p>Proxied sites may set their own cookies (for example age gates or preferences). These are stored in <em>your</em> browser under proxy-specific names so the target site works - our server keeps no copy and no profile of you.</p>
<h2>What a proxy can and can't hide</h2>
<p>A web proxy hides your IP address from the <em>target site</em>, which sees our server instead. Your internet provider can still see that you connected to this proxy. If you need provider-level privacy, use a VPN instead of, or alongside, this service.</p>
<h2>Third parties</h2>
<p>We do not sell personal data. Server logs may be processed by our hosting provider as part of normal operations.</p>
<h2>Children</h2>
<p>This service is intended for adults (18+) only.</p>
<h2>Changes</h2>
<p>If this policy changes materially, we will update the date above. Continued use of the site means you accept the current version.</p>
<h2>Contact</h2>
<p>Questions about this policy: use the contact details on our <a href="/terms-of-service.php">Terms of Service</a> page.</p>
</div></section>
<?php include __DIR__ . '/inc/footer.php'; ?>
