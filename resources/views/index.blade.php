@extends('partials.master')
@section('title', 'Home | ')
@section('content')	
        <div class="wrapper">
            <div class="left left-food"></div>
            <div class="right">
                <div class="top">
                    <img
                        src="img/meza@624.png"
                        width="312"
                        height="90"
                        alt=""
                        data-ix="move-into-view-delay-2"
                        style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;"
                    />
                </div>
                <div class="middle">
                    <div class="lead-in" data-ix="reveal" style="opacity: 1; transition: opacity 600ms;">
                        <div class="lead-left"></div>
                        <div class="lead-center"><div class="lead-in-title lead-in-food">Don't Miss it!</div></div>
                        <div class="lead-right"></div>
                    </div>
                    <h1 class="heading food-heading" data-ix="move-into-view" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;">Coming Soon</h1>
                    <p class="paragraph p-food" data-ix="move-into-view-delay-1" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 900ms, transform 900ms;">
                    Meza Resto bar brings authentic rustic Mediterranean/Greek /Portugal plus more .. flare blended with a vibrant night life and will become the hot spot in Etobicoke neighborhood of Toronto the menu offers guests a true taste of Mediterranean grill Cousine featuring both classic and modern staples.like the food ,the space itself is warm ,modern and inviting atmosphere.
                    </p>
                    <div class="w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" class="form">
                            <input
                                type="email"
                                class="text-field input-food w-input"
                                maxlength="256"
                                name="email"
                                data-name="Email"
                                data-ix="move-into-view-delay-2"
                                placeholder="Email"
                                id="email"
                                required=""
                                style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;"
                            />
                            <input
                                type="submit"
                                value="Sign Up"
                                data-wait="Please wait..."
                                class="submit-button button-food w-button"
                                data-ix="move-into-view-delay-2"
                                style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 1200ms, transform 1200ms;"
                            />
                        </form>
                        <div class="w-form-done"><div>Thank you! Your submission has been received!</div></div>
                        <div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div>
                    </div>
                </div>
                <div class="bottom" data-ix="reveal" style="opacity: 1; transition: opacity 600ms;">
                    <div class="folllow-text follow-food">Follow On:</div>
                    <ul class="list w-clearfix w-list-unstyled">
                        <li class="list-item" data-ix="hover-float" style="transition: transform 800ms; transform: translateX(0px) translateY(0px);"><a href="#" class="follow-link follow-link-food">Yelp</a></li>
                        <li class="list-item" data-ix="hover-float"><a href="#" class="follow-link follow-link-food">Facebook</a></li>
                        <li class="list-item" data-ix="hover-float"><a href="#" class="follow-link follow-link-food">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection


