<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment_page</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="checkout-container">
    <main class="form-section">
      <section class="form-group">
        <h2>Delivery</h2>
        <div class="input-row">
          <input type="text" placeholder="First name" class="input-field" />
          <input type="text" placeholder="Last name" class="input-field" />
        </div>
        <input type="text" placeholder="Address" class="input-field" />
        <input
          type="text"
          placeholder="Apartment, suite, etc. (optional)"
          class="input-field" />
        <div class="input-row">
          <input type="text" placeholder="City" class="input-field" />
          <input type="text" placeholder="Postal Code" class="input-field" />
        </div>
        <input type="text" placeholder="Phone number" class="input-field" />
        <label class="checkbox-label">
          <input type="checkbox" />Save this information for next time
        </label>
        <select class="input-field">
          <option>Standard Delivery</option>
          <option>Express Delivery</option>
        </select>
      </section>
      <section class="form-group">
        <h2>Payment</h2>
        <p>All transactions are secure and encrypted.</p>
        <div class="payment-header">
          <div class="payment-title">Credit card</div>
          <div class="payment-logos-combined"></div>
        </div>
        <div class="input-body">
          <input type="text" placeholder="Card number" class="input-field" />
          <div class="input-row">
            <input type="text" placeholder="MM/YY" class="input-field" />
            <input type="text" placeholder="CVC" class="input-field" />
          </div>
          <input type="text" placeholder="Name on card" class="input-field" />
        </div>
        <label class="checkbox-label">
          <input type="checkbox" checked /> Use shipping address as billing
          address
        </label>
      </section>
      <form action="../index.php" method="post">
        <button type="submit" class="submit-btn">Complete Purchase</button>
      </form>
    </main>
  </div>
</body>

</html>