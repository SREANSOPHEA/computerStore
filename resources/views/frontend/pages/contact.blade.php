@extends('frontend.masterPage')

@section('title',' - Contact Us')

@section('content')

<style>
    :root {
      --accent: #E8510A;
      --accent-dim: rgba(232,81,10,0.08);
      --accent-border: rgba(232,81,10,0.25);
      --bg-page: #F5F4F1;
      --bg-card: #FFFFFF;
      --bg-card2: #FAFAF9;
      --border: #E8E6E1;
      --text-primary: #1A1A1A;
      --text-muted: #888888;
      --text-faint: #BBBBBB;
    }
    /* ── Map block ── */
    .map-block {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .map-visual {
      width: 100%;
      height: 550px;
      position: relative;
    }
    .map-visual iframe {
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }
    .map-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      border-top: 1px solid var(--border);
      background: var(--bg-card2);
    }
    .map-footer-text {
      min-width: 70px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      font-size: 0.78rem;
      color: var(--text-muted);
      flex: 1;
    }
    .btn-directions {
      background: var(--accent);
      color: #fff;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      padding: 6px 14px;
      border-radius: 30px;
      border: none;
      white-space: nowrap;
      transition: opacity 0.2s;
      text-decoration: none;
    }
    .btn-directions:hover { opacity: 0.85; color: #fff; }
</style>

    <div class="container text-center mb-3" style="padding-top: 40px;">
        <div class="h1 text-primary mt-4">Contact Us</div>
        <div class="h5 mt-3 mb-4" style="color: rgb(141, 141, 141);">We are happy to serve and answer your questions anytime.</div>

        <div class="row mt-4 ">
            <div class="col-12 col-md-6 p-3" style="color: rgb(141, 141, 141);">
                <div class="bg-dark rounded p-3 h-100">
                    <div class="h3 mt-2"><i class="bi bi-info-circle-fill text-primary"></i> Contact Information</div>
                    <div class="text-start">
                        <div class="mb-3"><i class="bi bi-telephone-fill text-success" style="margin-right: 10px;"></i> <b>Phone:</b> 012 85 19 02 / 069 85 19 02</div>
                        <div class="mb-3"><i class="bi bi-telegram text-primary" style="margin-right: 10px;"></i> <b>Telegram Channel:</b> <a href="#">https://t.me/davytech</a></div>
                        <div class="mb-3"><i class="bi bi-envelope-fill text-danger" style="margin-right: 10px;"></i> <b>Email:</b> davy_com@yahoo.com</div>
                        <div class="mb-3"><i class="bi bi-geo-alt-fill text-warning" style="margin-right: 10px;"></i> <b>Address:</b> #432-433, St. 271, Teuk Thla, Sen Sok, Phnom Penh</div>
                        <div class="mb-3">If you have questions about computer, prices, warranties, or need consultation, please don't hesitate to contact us. Our team is always friendly and ready to help.</div>
                        <div class="mt-2 h6"><b>Follow and Contact Us via Social Media</b></div>
                        <div class="d-flex">
                            <div class="h2 m-2"><a href="#"><i class="bi bi-facebook text-primary"></i></a></div>
                            <div class="h2 m-2"><a href="#"><i class="bi bi-telegram text-info"></i></a></div>
                            <div class="h2 m-2"><a href="#"><i class="bi bi-messenger text-primary"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3 " style="color: rgb(141, 141, 141);">
                <div class="bg-dark rounded p-3 h-100">
                    <div class="h3 mt-2"><i class="bi bi-chat-dots-fill text-success"></i> Send Us a Message</div>
                    <form action="" class="contact-form">
                        <div class="text-start">
                            <label class="mb-2 h5">Your Name</label>
                            <input type="text" class="form-control mb-4" placeholder="Enter your name" >
                        </div>
                        <div class="text-start">
                            <label class="mb-2 h5">Email</label>
                            <input type="text" class="form-control mb-4" placeholder="example@email.com" >
                        </div>
                        <div class="text-start">
                            <label class="mb-2 h5">Message</label>
                            <textarea name="" class="form-control mb-3" placeholder="Write your message..." cols="30" rows="4"></textarea>
                        </div>
                        <div class="text-start mb-4">
                            <button class="btn btn-primary mb-2"><i class="bi bi-send-fill"></i> Send Message</button>
                            <div>* We will reply to your message as soon as possible.</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="h2 mt-2 mb-3 text-light">Store Location</div>
            <div class="mb-4">
                <div class="map-block">
                    <div class="map-visual">
                    <iframe
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=11.564169036273148,104.88904760084348&hl=en&z=14&output=embed">
                    </iframe>
                    </div>
                    <div class="map-footer">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill" style="color: var(--accent); font-size: 1rem; flex-shrink:0;"></i>
                            <span class="map-footer-text">#432-433, St. 271, Teuk Thla, Sen Sok, Phnom Penh</span>
                        </div>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=11.564169036273148,104.88904760084348"
                            target="_blank" class="btn-directions">
                            Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
