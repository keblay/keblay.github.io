<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite('resources/css/contact.css')

<head>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <!-- Your code -->
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h2 class="pb-2 border-bottom" id="list-item-contact">Contact</h2>
            <div class="card" style="width: 100%;">
                <div class="card-img-wrapper">
                    <img class="card-img-top" src="images/contact.jpg" alt="Card image cap">
                </div>
                <center><strong>Demandez un devis, réponse sous 48h</strong></center>
                <div class="card-body">
                    <p class="card-text">
                    <div class="form_container">
                        <form action="{{ url('/send-contact') }}" method="POST">
                            @csrf
                            <div class="row" id="form_row">
                                <div class="col">
                                    <input type="text" class="form-control" name="name" placeholder="Nom" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="phone" placeholder="Téléphone"
                                        required>
                                </div>
                                <div class="col-md-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="company" placeholder="Société"
                                        required>
                                </div>
                                <div>
                                    <textarea class="form-control" name="message" id="textarea_message"
                                        placeholder="Message" rows="5" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}">
                                </div>
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                    </div>

                    <div style="text-align: center; margin-top: 1%; width: 100%;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer</button>
                    </div>



                    </form>

                </div>
                </p>

            </div>
        </div>

    </div>
    </div>


</body>
