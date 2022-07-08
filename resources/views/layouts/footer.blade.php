
<?php
use App\Models\Contact;
$contact = Contact::find(1);
?>
<div class="border-top bg-dgray">
    <div class="container">
        <div class="py-5 d-flex w-100">
            <div class="">
                <a class="mr-2" href="{{'https://'.$contact->instagram}}" target="_blank">
                    <img src="image/icon/insta.svg" alt="">
                </a>
                <a href="{{'https://wa.me/'. $contact->whatsapp}}" target="_blank">
                    <img src="image/icon/whats.svg" alt=" ">
                </a>
                <span class="text-dark">&nbsp;&nbsp;&nbsp;ART SHOT  <span class="text-y">&copy;</span>  2021</span>
            </div>
            <div class="ml-auto">
                <a href="/contact" class="btn bg-y">تواصل معنا</a>
            </div>
        </div>
    </div>
</div>