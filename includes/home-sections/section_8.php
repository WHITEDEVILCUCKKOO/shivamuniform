<?php

if (isset($_POST['submit_from_home'])) {

    $first_name    = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $last_name     = htmlspecialchars(trim($_POST['last_name'] ?? ''));
    $customer_email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone_number  = htmlspecialchars(trim($_POST['phone_number'] ?? ''));
    $messege       = htmlspecialchars(trim($_POST['your_message'] ?? ''));
    $time          = date('Y-m-d H:i:s');

    $recipient = "shivamuniform605@gmail.com";
    // $recipient = "jibip82180@dreameg.com";

    // Email Subject
    $email_subject = "New Contact Form Submission";

    // Email Body
    $email_content  = "Date : $time\n";
    $email_content .= "First Name : $first_name\n";
    $email_content .= "Last Name : $last_name\n";
    $email_content .= "Email : $customer_email\n";
    $email_content .= "Phone Number : $phone_number\n";
    $email_content .= "Message : $messege\n";

    // Email Headers
    $email_headers  = "From: Website Contact Form <no-reply@yourdomain.com>\r\n";
    $email_headers .= "Reply-To: $customer_email\r\n";
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send Email<?php

    if (isset($_POST['submit_from_home'])) {

        $first_name     = trim($_POST['first_name'] ?? '');
        $last_name      = trim($_POST['last_name'] ?? '');
        $customer_email = trim($_POST['email'] ?? '');
        $phone_number   = trim($_POST['phone_number'] ?? '');
        $message        = trim($_POST['your_message'] ?? '');

        $time = date('Y-m-d H:i:s');

        $recipient = "jibip82180@dreameg.com";

        $email_subject = "New Contact Form Submission";

        $email_content  = "Date : " . $time . "\n";
        $email_content .= "First Name : " . $first_name . "\n";
        $email_content .= "Last Name : " . $last_name . "\n";
        $email_content .= "Email : " . $customer_email . "\n";
        $email_content .= "Phone Number : " . $phone_number . "\n";
        $email_content .= "Message : " . $message . "\n";

        /*
     * IMPORTANT:
     * no-reply@yourdomain.com ko apne actual domain
     * ki email se replace karo.
     */

        $email_headers  = "From: Website Contact Form <no-reply@yourdomain.com>\r\n";
        $email_headers .= "Reply-To: " . $customer_email . "\r\n";
        $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($recipient, $email_subject, $email_content, $email_headers)) {

            echo "<script>
            alert('Thank you! Aapka message bhej diya gaya hai.');
        </script>";
        } else {

            echo "<script>
            alert('Mail function failed. Server mail configuration check karo.');
        </script>";
        }
    } else {

        echo "<script>
        alert('Form submit nahi hua. submit_from_home check karo.');
    </script>";
    }
};
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    #shivam-faq-contact,
    #shivam-faq-contact * {
        box-sizing: border-box !important;
    }

    #shivam-faq-contact {
        --blue: #001641;
        --green: #1E712C;
        --white: #FFFFFF;
        --text: #5F6975;
        --border: #E3E8EE;

        width: 100% !important;
        margin: 0 !important;

        padding: 48px 20px 52px !important;

        position: relative !important;
        overflow: hidden !important;

        background:
            linear-gradient(135deg,
                #FFFFFF 0%,
                #F7F9FB 52%,
                #F2F7F3 100%) !important;

        font-family: 'Manrope', sans-serif !important;
    }


    /* =========================================================
   CONTAINER
========================================================= */

    #shivam-faq-contact .sfc-container {
        width: 100% !important;
        max-width: 1140px !important;

        margin: 0 auto !important;

        display: grid !important;

        grid-template-columns:
            minmax(0, 1fr) minmax(0, .88fr) !important;

        align-items: start !important;

        gap: 55px !important;
    }


    /* =========================================================
   FAQ LEFT
========================================================= */

    #shivam-faq-contact .sfc-label {
        display: flex !important;

        align-items: center !important;

        gap: 9px !important;

        margin: 0 0 11px !important;

        color: var(--green) !important;

        font-size: 11px !important;
        font-weight: 800 !important;

        letter-spacing: 1.6px !important;
        text-transform: uppercase !important;
    }

    #shivam-faq-contact .sfc-label::before {
        content: "" !important;

        width: 27px !important;
        height: 2px !important;

        background: var(--green) !important;

        border-radius: 30px !important;
    }


    #shivam-faq-contact .sfc-heading {
        margin: 0 !important;

        color: var(--blue) !important;

        font-size: 39px !important;
        font-weight: 800 !important;

        line-height: 1.18 !important;

        letter-spacing: -1.1px !important;
    }

    #shivam-faq-contact .sfc-heading span {
        color: var(--green) !important;
    }


    #shivam-faq-contact .sfc-intro {
        max-width: 570px !important;

        margin: 14px 0 26px !important;

        color: var(--text) !important;

        font-size: 16px !important;
        line-height: 1.75 !important;
    }


    /* =========================================================
   FAQ LIST
========================================================= */

    #shivam-faq-contact .sfc-faq-list {
        width: 100% !important;

        border-top: 1px solid var(--border) !important;
    }

    #shivam-faq-contact .sfc-faq-item {
        width: 100% !important;

        border-bottom: 1px solid var(--border) !important;
    }


    /* QUESTION */

    #shivam-faq-contact .sfc-question {
        width: 100% !important;

        min-height: 66px !important;

        margin: 0 !important;

        padding: 17px 4px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: space-between !important;

        gap: 18px !important;

        border: 0 !important;
        outline: 0 !important;

        background: transparent !important;

        cursor: pointer !important;

        text-align: left !important;

        color: var(--blue) !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 15px !important;
        font-weight: 700 !important;

        line-height: 1.5 !important;
    }


    #shivam-faq-contact .sfc-question-left {
        display: flex !important;

        align-items: center !important;

        gap: 13px !important;
    }


    #shivam-faq-contact .sfc-faq-no {
        color: var(--green) !important;

        font-size: 10px !important;
        font-weight: 800 !important;
    }


    /* PLUS */

    #shivam-faq-contact .sfc-plus {
        width: 30px !important;
        height: 30px !important;

        min-width: 30px !important;

        position: relative !important;

        border-radius: 50% !important;

        border: 1px solid #D9DFE6 !important;
    }

    #shivam-faq-contact .sfc-plus::before,
    #shivam-faq-contact .sfc-plus::after {
        content: "" !important;

        position: absolute !important;

        left: 50% !important;
        top: 50% !important;

        width: 11px !important;
        height: 1.5px !important;

        background: var(--blue) !important;

        transform: translate(-50%, -50%) !important;

        transition: .3s ease !important;
    }

    #shivam-faq-contact .sfc-plus::after {
        transform:
            translate(-50%, -50%) rotate(90deg) !important;
    }


    /* ACTIVE */

    #shivam-faq-contact .sfc-faq-item.active .sfc-question {
        color: var(--green) !important;
    }

    #shivam-faq-contact .sfc-faq-item.active .sfc-plus {
        background: var(--green) !important;

        border-color: var(--green) !important;
    }

    #shivam-faq-contact .sfc-faq-item.active .sfc-plus::before,
    #shivam-faq-contact .sfc-faq-item.active .sfc-plus::after {
        background: #FFFFFF !important;
    }

    #shivam-faq-contact .sfc-faq-item.active .sfc-plus::after {
        transform:
            translate(-50%, -50%) rotate(0deg) !important;
    }


    /* =========================================================
   FAQ ANSWER
========================================================= */

    #shivam-faq-contact .sfc-answer {
        max-height: 0 !important;

        overflow: hidden !important;

        opacity: 0 !important;

        padding:
            0 46px 0 30px !important;

        transition:
            max-height .38s ease,
            opacity .28s ease,
            padding .38s ease !important;
    }


    #shivam-faq-contact .sfc-faq-item.active .sfc-answer {
        max-height: 280px !important;

        opacity: 1 !important;

        padding:
            18px 46px 18px 30px !important;
    }


    #shivam-faq-contact .sfc-answer p {
        margin: 0 !important;

        color: #626C78 !important;

        font-size: 15px !important;
        font-weight: 400 !important;

        line-height: 1.75 !important;
    }


    /* =========================================================
   RIGHT FORM BOX
========================================================= */

    #shivam-faq-contact .sfc-form-wrap {
        width: 100% !important;

        padding: 30px 28px !important;

        position: relative !important;

        border-radius: 14px !important;

        background: #FFFFFF !important;

        border: 1px solid #E4E9EE !important;

        box-shadow:
            0 16px 42px rgba(0, 22, 65, .08) !important;
    }


    #shivam-faq-contact .sfc-form-wrap::before {
        content: "" !important;

        position: absolute !important;

        left: 0 !important;
        top: 0 !important;

        width: 100% !important;
        height: 4px !important;

        background:
            linear-gradient(90deg,
                var(--green),
                #348443) !important;

        border-radius:
            14px 14px 0 0 !important;
    }


    #shivam-faq-contact .sfc-form-label {
        margin: 0 0 8px !important;

        color: var(--green) !important;

        font-size: 10.5px !important;
        font-weight: 800 !important;

        letter-spacing: 1.4px !important;

        text-transform: uppercase !important;
    }


    #shivam-faq-contact .sfc-form-title {
        margin: 0 !important;

        color: var(--blue) !important;

        font-size: 25px !important;
        font-weight: 800 !important;

        line-height: 1.3 !important;
    }


    #shivam-faq-contact .sfc-form-text {
        margin: 10px 0 22px !important;

        color: #68727E !important;

        font-size: 15px !important;
        line-height: 1.7 !important;
    }


    /* =========================================================
   FLUENT FORM STYLING
========================================================= */

    #shivam-faq-contact .sfc-form-slot .ff-el-group {
        margin-bottom: 14px !important;
    }


    #shivam-faq-contact .sfc-form-slot .ff-el-input--label {
        margin-bottom: 7px !important;
    }


    #shivam-faq-contact .sfc-form-slot .ff-el-input--label label {
        color: var(--blue) !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 13px !important;
        font-weight: 700 !important;
    }


    #shivam-faq-contact .sfc-form-slot .ff-el-form-control {
        width: 100% !important;

        min-height: 47px !important;

        padding: 11px 13px !important;

        border: 1px solid #DCE2E8 !important;

        border-radius: 6px !important;

        background: #FAFBFC !important;

        color: #263144 !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 13.5px !important;

        box-shadow: none !important;

        outline: none !important;

        transition: .25s ease !important;
    }


    #shivam-faq-contact .sfc-form-slot .ff-el-form-control:focus {
        border-color: rgba(30, 113, 44, .70) !important;

        background: #FFFFFF !important;

        box-shadow:
            0 0 0 3px rgba(30, 113, 44, .07) !important;
    }


    #shivam-faq-contact .sfc-form-slot textarea.ff-el-form-control {
        min-height: 105px !important;
    }


    /* RADIO / CHECKBOX */

    #shivam-faq-contact .sfc-form-slot .ff-el-form-check-label {
        color: #616B77 !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 13px !important;
    }


    #shivam-faq-contact .sfc-form-slot input[type="checkbox"],
    #shivam-faq-contact .sfc-form-slot input[type="radio"] {
        accent-color: var(--green) !important;
    }


    /* SUBMIT BUTTON */

    #shivam-faq-contact .sfc-form-slot .ff-btn,
    #shivam-faq-contact .sfc-form-slot .ff-btn-submit,
    #shivam-faq-contact .sfc-form-slot button[type="submit"] {
        width: 100% !important;

        min-height: 49px !important;

        padding: 0 20px !important;

        border: 0 !important;

        border-radius: 6px !important;

        background: var(--blue) !important;

        color: #FFFFFF !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 13.5px !important;
        font-weight: 700 !important;

        cursor: pointer !important;

        transition: .25s ease !important;
    }


    #shivam-faq-contact .sfc-form-slot .ff-btn:hover,
    #shivam-faq-contact .sfc-form-slot .ff-btn-submit:hover,
    #shivam-faq-contact .sfc-form-slot button[type="submit"]:hover {
        background: var(--green) !important;

        transform: translateY(-2px) !important;
    }


    /* SUCCESS MESSAGE */

    #shivam-faq-contact .sfc-form-slot .ff-message-success {
        padding: 13px 15px !important;

        border: 1px solid rgba(30, 113, 44, .22) !important;

        border-radius: 7px !important;

        background: rgba(30, 113, 44, .06) !important;

        color: var(--green) !important;

        font-size: 13px !important;
    }


    /* =========================================================
   TABLET
========================================================= */

    @media(max-width:900px) {

        #shivam-faq-contact {
            padding: 43px 18px 46px !important;
        }

        #shivam-faq-contact .sfc-container {
            gap: 35px !important;
        }

        #shivam-faq-contact .sfc-heading {
            font-size: 34px !important;
        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media(max-width:700px) {

        #shivam-faq-contact {
            padding: 38px 14px 41px !important;
        }


        #shivam-faq-contact .sfc-container {
            display: flex !important;

            flex-direction: column !important;

            gap: 29px !important;
        }


        #shivam-faq-contact .sfc-faq {
            text-align: center !important;
        }


        #shivam-faq-contact .sfc-label {
            justify-content: center !important;
        }


        #shivam-faq-contact .sfc-heading {
            margin: 0 auto !important;

            font-size: 29px !important;
        }


        #shivam-faq-contact .sfc-intro {
            margin: 11px auto 21px !important;

            font-size: 14px !important;
        }


        #shivam-faq-contact .sfc-faq-list {
            text-align: left !important;
        }


        #shivam-faq-contact .sfc-question {
            font-size: 13.5px !important;
        }


        #shivam-faq-contact .sfc-faq-item.active .sfc-answer {
            padding:
                15px 35px 15px 25px !important;
        }


        #shivam-faq-contact .sfc-answer p {
            font-size: 13.5px !important;

            line-height: 1.7 !important;
        }


        #shivam-faq-contact .sfc-form-wrap {
            width: 100% !important;

            max-width: 500px !important;

            margin: 0 auto !important;

            padding: 24px 19px !important;
        }


        #shivam-faq-contact .sfc-form-title {
            font-size: 22px !important;
        }


        #shivam-faq-contact .sfc-form-text {
            font-size: 14px !important;
        }

    }
</style>


<section id="shivam-faq-contact">

    <div class="sfc-container">


        <!-- LEFT FAQ -->

        <div class="sfc-faq">


            <div class="sfc-label">
                Frequently Asked Questions
            </div>


            <h2 class="sfc-heading">
                Questions About
                <span>Our Uniforms?</span>
            </h2>


            <p class="sfc-intro">
                Find quick answers about our uniform categories,
                requirements, bulk orders and ordering process.
            </p>



            <div class="sfc-faq-list">


                <!-- FAQ 01 -->

                <div class="sfc-faq-item active">

                    <button
                        class="sfc-question"
                        type="button"
                        aria-expanded="true">

                        <span class="sfc-question-left">

                            <span class="sfc-faq-no">01</span>

                            What types of uniforms do you provide?

                        </span>

                        <span class="sfc-plus"></span>

                    </button>


                    <div class="sfc-answer">

                        <p>
                            We provide uniforms for schools, corporates,
                            industries, security teams, housekeeping,
                            hotels, hospitality businesses and other
                            professional requirements.
                        </p>

                    </div>

                </div>



                <!-- FAQ 02 -->

                <div class="sfc-faq-item">

                    <button
                        class="sfc-question"
                        type="button"
                        aria-expanded="false">

                        <span class="sfc-question-left">

                            <span class="sfc-faq-no">02</span>

                            Do you provide school uniforms?

                        </span>

                        <span class="sfc-plus"></span>

                    </button>


                    <div class="sfc-answer">

                        <p>
                            Yes. School uniforms are one of our key categories,
                            with practical options suited to everyday student
                            wear and institutional requirements.
                        </p>

                    </div>

                </div>



                <!-- FAQ 03 -->

                <div class="sfc-faq-item">

                    <button
                        class="sfc-question"
                        type="button"
                        aria-expanded="false">

                        <span class="sfc-question-left">

                            <span class="sfc-faq-no">03</span>

                            Can you handle bulk uniform requirements?

                        </span>

                        <span class="sfc-plus"></span>

                    </button>


                    <div class="sfc-answer">

                        <p>
                            Yes. You can share your required category,
                            approximate quantity and specifications with
                            our team so we can suggest suitable options.
                        </p>

                    </div>

                </div>



                <!-- FAQ 04 -->

                <div class="sfc-faq-item">

                    <button
                        class="sfc-question"
                        type="button"
                        aria-expanded="false">

                        <span class="sfc-question-left">

                            <span class="sfc-faq-no">04</span>

                            Do you provide uniforms for corporate teams?

                        </span>

                        <span class="sfc-plus"></span>

                    </button>


                    <div class="sfc-answer">

                        <p>
                            Yes. We provide uniform solutions for corporate
                            teams and workplaces that need a clean,
                            coordinated and professional appearance.
                        </p>

                    </div>

                </div>



                <!-- FAQ 05 -->

                <div class="sfc-faq-item">

                    <button
                        class="sfc-question"
                        type="button"
                        aria-expanded="false">

                        <span class="sfc-question-left">

                            <span class="sfc-faq-no">05</span>

                            How can I send my uniform requirement?

                        </span>

                        <span class="sfc-plus"></span>

                    </button>


                    <div class="sfc-answer">

                        <p>
                            Fill out the enquiry form with your contact details,
                            uniform category and basic requirement. Our team can
                            then connect with you for the next steps.
                        </p>

                    </div>

                </div>


            </div>

        </div>



        <!-- RIGHT FORM -->

        <div class="sfc-form-wrap">


            <div class="sfc-form-label">
                Send Your Requirement
            </div>


            <h3 class="sfc-form-title">
                Tell Us What You Need
            </h3>


            <p class="sfc-form-text">
                Share your uniform requirement and contact details.
                Our team can connect with you to understand the
                suitable options for your institution or business.
            </p>













































            <div class="sfc-form-slot">

                <!-- <div class="sfc-form-box"> -->




                <form class="sfc-custom-form" method="post">

                    <div class="sfc-form-row">

                        <div class="sfc-form-group">
                            <label>First Name <span>*</span></label>
                            <input type="text" name="first_name" placeholder="First Name" required>
                        </div>

                        <div class="sfc-form-group">
                            <label>Last Name <span>*</span></label>
                            <input type="text" name="last_name" placeholder="Last Name">
                        </div>

                    </div>

                    <div class="sfc-form-row">
                        <div class="sfc-form-group">
                            <label>Email <span>*</span></label>

                            <input
                                type="email"
                                name="email"
                                placeholder="Email Address"
                                required
                                autocomplete="email">
                        </div>


                        <div class="sfc-form-group">
                            <label>Phone Number <span>*</span></label>

                            <input
                                type="tel"
                                name="phone_number"
                                placeholder="Phone Number"
                                required
                                inputmode="numeric"
                                maxlength="10"
                                pattern="[0-9]{10}"
                                title="Please enter exactly 10 digits">
                        </div>
                    </div>

                    <div class="sfc-form-group sfc-message-group">
                        <label>Your Message <span>*</span></label>
                        <textarea name="your_message" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" name="submit_from_home" value="1" class="sfc-submit-btn">
                        Submit Form
                    </button>

                </form>

                <!-- </div> -->

            </div>


            <style>
                .sfc-form-slot {
                    width: 100%;
                    padding: 0;
                    box-sizing: border-box;
                }

                .sfc-form-slot * {
                    box-sizing: border-box;
                }

                .sfc-form-box {
                    width: 100%;
                    background: #ffffff;
                    border-radius: 14px;
                    padding: 32px;
                    border-top: 4px solid #238b57;
                    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                    font-family: Arial, sans-serif;
                }

                .sfc-form-label {
                    font-size: 13px;
                    font-weight: 700;
                    letter-spacing: 1px;
                    color: #238b57;
                    margin-bottom: 14px;
                }

                .sfc-form-box h2 {
                    margin: 0 0 12px;
                    font-size: 29px;
                    line-height: 1.25;
                    font-weight: 700;
                    color: #071535;
                }

                .sfc-form-description {
                    margin: 0 0 34px;
                    max-width: 95%;
                    font-size: 17px;
                    line-height: 1.65;
                    color: #858b91;
                }

                .sfc-custom-form {
                    width: 100%;
                }

                .sfc-form-row {
                    width: 100%;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 17px;
                    margin-bottom: 23px;
                }

                .sfc-form-group {
                    width: 100%;
                }

                .sfc-form-group label {
                    display: block;
                    margin-bottom: 11px;
                    font-size: 15px;
                    line-height: 1.3;
                    font-weight: 600;
                    color: #101c35;
                }

                .sfc-form-group label span {
                    color: #ed5360;
                }

                .sfc-form-group input,
                .sfc-form-group textarea {
                    width: 100%;
                    border: 1px solid #e1e5e9;
                    background: #fbfcfd;
                    border-radius: 7px;
                    outline: none;
                    font-size: 15px;
                    color: #172033;
                    font-family: inherit;
                    transition: 0.2s ease;
                }

                .sfc-form-group input {
                    height: 52px;
                    padding: 0 15px;
                }

                .sfc-form-group textarea {
                    height: 118px;
                    padding: 14px 15px;
                    resize: vertical;
                }

                .sfc-form-group input::placeholder,
                .sfc-form-group textarea::placeholder {
                    color: #9da3aa;
                }

                .sfc-form-group input:focus,
                .sfc-form-group textarea:focus {
                    border-color: #238b57;
                    background: #ffffff;
                }

                .sfc-message-group {
                    margin-bottom: 16px;
                }

                .sfc-submit-btn {
                    width: 100%;
                    height: 55px;
                    border: none;
                    border-radius: 7px;
                    background: #090f43;
                    color: #ffffff;
                    font-size: 15px;
                    font-weight: 700;
                    font-family: inherit;
                    cursor: pointer;
                    transition: 0.25s ease;
                }

                .sfc-submit-btn:hover {
                    background: #111957;
                }



                @media (max-width: 700px) {

                    .sfc-form-box {
                        padding: 26px 22px;
                    }

                    .sfc-form-box h2 {
                        font-size: 25px;
                    }

                    .sfc-form-description {
                        font-size: 15px;
                        line-height: 1.55;
                        margin-bottom: 27px;
                    }

                    .sfc-form-row {
                        grid-template-columns: 1fr;
                        gap: 20px;
                        margin-bottom: 20px;
                    }

                }


                @media (max-width: 480px) {

                    .sfc-form-box {
                        padding: 24px 18px;
                        border-radius: 12px;
                    }

                    .sfc-form-label {
                        font-size: 11px;
                        margin-bottom: 11px;
                    }

                    .sfc-form-box h2 {
                        font-size: 23px;
                    }

                    .sfc-form-description {
                        font-size: 14px;
                        margin-bottom: 25px;
                    }

                    .sfc-form-group label {
                        font-size: 14px;
                    }

                    .sfc-form-group input {
                        height: 50px;
                    }

                    .sfc-form-group textarea {
                        height: 115px;
                    }

                    .sfc-submit-btn {
                        height: 52px;
                    }

                }
            </style>







































        </div>


    </div>

</section>


<script>
    (function() {

        const section =
            document.querySelector('#shivam-faq-contact');

        if (!section) {
            return;
        }


        const items =
            section.querySelectorAll('.sfc-faq-item');


        items.forEach(function(item) {

            const button =
                item.querySelector('.sfc-question');

            if (!button) {
                return;
            }


            button.addEventListener('click', function() {

                const isOpen =
                    item.classList.contains('active');


                items.forEach(function(other) {

                    other.classList.remove('active');


                    const otherButton =
                        other.querySelector('.sfc-question');


                    if (otherButton) {

                        otherButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                });


                if (!isOpen) {

                    item.classList.add('active');


                    button.setAttribute(
                        'aria-expanded',
                        'true'
                    );

                }

            });

        });

    })();
</script>