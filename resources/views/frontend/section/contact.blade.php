<section class="contact section" id="contact">
    <h2 data-heading="Get in touch" class="section__title">Contact Me</h2>

    <div class="contact__container container grid">
        <div class="contact__content">
            <div class="contact__info">
                <div class="contact__card">
                    <i class="uil uil-envelope-edit contact__card-icon"></i>
                    <h3 class="contact__card-title">Email</h3>
                    <span class="contact__card-data">{{ $home->email }}</span>
                    <span class="contact__button"> Write me<i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>

                <div class="contact__card">
                    <i class="uil uil-whatsapp contact__card-icon"></i>
                    <h3 class="contact__card-title">Whatsapp</h3>
                    <span class="contact__card-data">{{ $home->whatsapp }}</span>
                    <span class="contact__button"> Write me<i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>

                <div class="contact__card">
                    <i class="uil uil-facebook-messenger contact__card-icon"></i>
                    <h3 class="contact__card-title">Messenger</h3>
                    <span class="contact__card-data">{{ $home->messenger }}</span>
                    <span class="contact__button"> Write me<i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="contact__content">
            <form action="{{ route('store.message') }}" class="contact__form" method="post">
                @csrf
                <div class="input__container">
                    <input type="text" class="input" name="name" required />
                    <label for="">Full Name</label>
                    <span>Full Name</span>
                </div>
                <div class="input__container">
                    <input type="email" class="input" name="email" required />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input__container">
                    <input type="tel" class="input" name="phone" required />
                    <label for="">Phone</label>
                    <span>Phone</span>
                </div>
                <div class="input__container textarea">
                    <textarea name="message" id="" class="input" required></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                </div>
                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>Send
                    Message</button>
            </form>
        </div>
    </div>
</section>
