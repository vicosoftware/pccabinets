<!-- bg-soft-primary / bg-light : angled ( lower-end / upper-end ) or wrapper-border -->
<section class="wrapper bg-light angled lower-end">
    <div class="container py-14 py-md-16">
        <h2 class="display-4 mb-3 text-center">Happy Customers</h2>
        <p class="lead text-center mb-6 px-md-16 px-lg-0">Customer satisfaction is our major goal. See what our customers are saying about us.</p>
        <div class="position-relative">            
            <div class="carousel owl-carousel gap-small owl-loaded owl-drag" 
                    data-margin="0" 
                    data-dots="true" 
                    data-autoplay="true" 
                    data-autoplay-timeout="5000" 
                    data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;992&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;1200&quot;:{&quot;items&quot;: &quot;3&quot;}}">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1110px, 0px, 0px); transition: all 0s ease 0s; width: 2220px;">
                        <?php
                        // ITEMS (BEGIN) ===========================================================================
                        $objService = "";
                        $jsonData = '{
                            "items":[
                                {
                                    "source":"yelp",
                                    "picture":"steve",
                                    "qualification":"5.0",
                                    "author":"Steve And Me D.",
                                    "position":"Henderson, NV",
                                    "posted":"9/11/2021",
                                    "feedback":"We had water damage and our renters were very difficult to work with. I called the owner \"angel\" because I do not know what I would have done without Precious Custom Cabinets!  They got it done quickly, beautifully... and the workers even got tested for covid before the vaccine was readily available. I highly recommend them... they\'re the best!"
                                },
                                {
                                    "source":"yelp",
                                    "picture":"susie",
                                    "qualification":"5.0",
                                    "author":"Susie P.",
                                    "position":"Santa Ana, CA",
                                    "posted":"5/8/2020",
                                    "feedback":"Had an amazing experience with not only his quality of work but overall the great customer service he provided.. They did an awesome job with my kitchen with very high end quality work.. Highly recommended. Absolutely impressed with Arturo on how professional and awesome customer service he provided."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"empty",
                                    "qualification":"5.0",
                                    "author":"Carol H.",
                                    "position":"Costa Mesa, CA",
                                    "posted":"10/7/2019",
                                    "feedback":"Arturo and his crew were very professional and courteous. Did their job in a timely manner. We were very pleased with the outcome. They even offered to clean our vents and fix little things here and there around the house. Their prices were reasonable. I would highly recommend."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"cd",
                                    "qualification":"5.0",
                                    "author":"C D.",
                                    "position":"Lakewood, CA",
                                    "posted":"4/3/2020",
                                    "feedback":"Arturo and his guys turned my hideous kitchen into a beautiful focal point of my house.  They did a beautiful job and if something needed attention, Arturo made sure it was corrected.  It\'s been a couple of months since it was done and I still enjoy looking at it.  Art made good use of my available space with deeper cabinets and a cool bench with storage since I had a window preventing a  longer counter option.  Best investment in my house.  Thank you Art!  I will post some pics later."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"empty",
                                    "qualification":"5.0",
                                    "author":"Adel P.",
                                    "position":"Covina, CA",
                                    "posted":"5/4/2018",
                                    "feedback":"I had the best experience with these guys!  No job too small, they brought my kitchen back to life.  I was a bit sceptical at first but Arthuro walked me through the entire process and invited me to his warehouse to see everything.  Their workers are nice and professional!  Hard working group of guys!  I would definitely use them again for other cabinetry work!  I\'m not one to write reviews but they were fantastic!  Thank you!!"
                                },
                                {
                                    "source":"yelp",
                                    "picture":"empty",
                                    "qualification":"5.0",
                                    "author":"Dennis C.",
                                    "position":"Los Angeles, CA",
                                    "posted":"2/15/2019",
                                    "feedback":"Working with Arturo was a dream. He was very helpful the whole time. He gave me a very reasonable price and delivered on all aspects. The quality and professionalism from him and his crew were much better than the big name companies. He not only designed and installed my kitchen cabinets, but he designed my bathrooms as well. He has an eye for detail which the other contractors I interviewed did not have..."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"empty",
                                    "qualification":"5.0",
                                    "author":"Richard D.",
                                    "position":"Downey, CA",
                                    "posted":"8/1/2019",
                                    "feedback":"We got 3 estimates for kitchens and this was in line with all 3 but what set them apart was their attention to detail, professionalism and quality of work. Art, answered all our questions and offered ideas for designing our kitchen. We are so happy with his work. Our friends have already contacted him for work."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"jeffery",
                                    "qualification":"5.0",
                                    "author":"Jeffery A.",
                                    "position":"Kailua, HI",
                                    "posted":"8/2/2017",
                                    "feedback":"Arturo and his guys were great to deal with from the beginning. Attention to detail exceeded my expectations. Our kitchen and built in seating and bathroom vanity turned out beautiful. They do great work. These guys are fair and honest."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"empty",
                                    "qualification":"5.0",
                                    "author":"V M.",
                                    "position":"Huntington Beach, CA",
                                    "posted":"12/21/2017",
                                    "feedback":"Couldn\'t be happier with the service and quality.  Arturo was not only responsive, but also flexible about meeting times.  The installation crew was great, and even came on a Sunday to finish up. All around great company to work with if you are looking for custom cabinets, and reasonably priced."
                                },
                                {
                                    "source":"yelp",
                                    "picture":"emma",
                                    "qualification":"5.0",
                                    "author":"Emma D.",
                                    "position":"Tustin, CA",
                                    "posted":"7/19/2016",
                                    "feedback":"I had been wanting to give my kitchen a \"facelift\" for a long time but was hesitant due to the horror stories I had heard. Then Precious Cabinets came along. I was so pleased with the work that was done on my kitchen!  Albert had been referred to me by a friend and I couldn\'t be happier.  The communication was great the entire way through and they were true to their word on the timing of the entire project..."
                                }
                            ]
                        }';

                        $jsonData = json_decode($jsonData);
                        //print_r($jsonData);

                        foreach ($jsonData->items as $item) {

                            switch( $item->qualification ){
                                case "1.0":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "1.5":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-50.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "2.0":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "2.5":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-50.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "3.0":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "3.5":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-50.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "4.0":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-none.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "4.5":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star-50.png" alt="" style="width: 20px;"></td>
                                '; break;
                                case "5.0":  $qualification = '
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                    <td width="25px"><img src="assets/img/review/review-star.png" alt="" style="width: 20px;"></td>
                                '; break;
                            }

                            $objService .= '
                            <div class="owl-item" style="width: 370px;"><div class="item"><div class="item-inner">
                                <div class="card" style="margin-top: 50px; box-shadow: 0px 0px 15px rgba(0,0,0,0.2);">
                                    <div class="card-body" style="height: 100%;">
                                        <div class="user-info" style="display: block; position: relative; margin-bottom: 20px;">
                                            <div class="user-info-reviewLogo" style="position: absolute; top: -50px; right: -20px;">
                                                <img style="width: 100px;" src="assets/img/review/'.$item->source.'.png" alt="'.$item->source.'">
                                            </div>
                                            <div class="user-info-avatar" style="position: absolute; top: -110px;">
                                                <img class="rounded-circle" src="assets/img/review/avatar/'.$item->picture.'.jpg" srcset="assets/img/review/avatar/'.$item->picture.'.jpg 2x" alt="" style="width: 100px; border: 4px solid #FFF; box-shadow: 0px 2px 15px rgba(0,0,0,0.1);">
                                            </div>
                                            <div class="user-info-content" style="margin-top: 20px;">
                                                <p>
                                                    <span style="display: block; font-size: 20px; font-weight: bold;">'.$item->author.'</span>
                                                    <span style="display: block; font-size: 12px; margin-top: -5px;">'.$item->position.' | '.$item->posted.'</span>
                                                </p>
                                            </div>
                                            <div class="user-info-review" style="margin-top: -10px;">
                                                <table><tr>'.$qualification.'</tr></table>
                                            </div>
                                        </div>
                                        <div class="user-feedback" style="display:block; margin-top: 10px;">
                                            <blockquote class="icon mb-0">
                                            <p class="text-center">“'.$item->feedback.'”</p>
                                            <div class="blockquote-details">
                                                <a href="https://www.yelp.com/biz/precious-custom-cabinets-south-gate?osq=precious%20custom%20cabinets&start=10"><strong>Read more...</strong></a>
                                            </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div>
                            ';
                        }

                        echo $objService;
                        ?>
                    </div>
                </div>
                
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><i class="uil-arrow-left"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="uil-arrow-right"></i></button>
                </div>

                <div class="owl-dots disabled">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                </div>
            </div>
        </div>
    </div>
</section>