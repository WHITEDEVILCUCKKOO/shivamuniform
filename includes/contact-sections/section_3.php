<!-- =========================================================
     SHIVAM UNIFORM
     CONTACT US PAGE - SECTION 03
     CLEAN PROFESSIONAL ENQUIRY + FLUENT FORM

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF

     FLUENT FORM:
     [fluentform id="1"]
========================================================= -->

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#shivam-enquiry-section,
#shivam-enquiry-section *{
    box-sizing:border-box !important;
}

#shivam-enquiry-section{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;
    --border:#E2E7EC;

    width:100% !important;
    margin:0 !important;

    padding:
        48px
        20px
        52px !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        linear-gradient(
            135deg,
            #FFFFFF 0%,
            #F8FAFB 58%,
            #F3F8F4 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   SUBTLE BACKGROUND
========================================================= */

#shivam-enquiry-section::before{
    content:"" !important;

    position:absolute !important;

    width:260px !important;
    height:260px !important;

    right:-145px !important;
    top:-145px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-enquiry-section::after{
    content:"" !important;

    position:absolute !important;

    width:190px !important;
    height:190px !important;

    left:-105px !important;
    bottom:-110px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(0,22,65,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-enquiry-section .seq-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   SECTION HEADER
========================================================= */

#shivam-enquiry-section .seq-header{
    width:100% !important;
    max-width:760px !important;

    margin:
        0
        auto
        28px !important;

    text-align:center !important;
}


/* LABEL */

#shivam-enquiry-section .seq-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    margin:
        0
        0
        10px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-enquiry-section .seq-label::before,
#shivam-enquiry-section .seq-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-enquiry-section .seq-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:38px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-1px !important;
}


#shivam-enquiry-section .seq-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-enquiry-section .seq-description{
    max-width:690px !important;

    margin:
        12px
        auto
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.7 !important;
}


/* =========================================================
   MAIN BOX
========================================================= */

#shivam-enquiry-section .seq-main{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(280px,.72fr)
        minmax(0,1.28fr) !important;

    border:
        1px solid
        rgba(0,22,65,.09) !important;

    border-radius:14px !important;

    overflow:hidden !important;

    background:#FFFFFF !important;

    box-shadow:
        0 16px 42px
        rgba(0,22,65,.07) !important;

    position:relative !important;
}


/* TOP GREEN ACCENT */

#shivam-enquiry-section .seq-main::before{
    content:"" !important;

    position:absolute !important;

    left:0 !important;
    top:0 !important;

    width:110px !important;
    height:4px !important;

    background:var(--green) !important;

    z-index:4 !important;
}


/* =========================================================
   LEFT INFORMATION PANEL
========================================================= */

#shivam-enquiry-section .seq-side{
    padding:
        32px
        28px !important;

    position:relative !important;

    border-right:
        1px solid
        rgba(0,22,65,.08) !important;

    background:
        linear-gradient(
            145deg,
            #F7FAF8 0%,
            #FFFFFF 100%
        ) !important;
}


/* SMALL */

#shivam-enquiry-section .seq-side-small{
    display:block !important;

    margin-bottom:7px !important;

    color:var(--green) !important;

    font-size:9.5px !important;
    font-weight:800 !important;

    letter-spacing:1.3px !important;

    text-transform:uppercase !important;
}


/* SIDE HEADING */

#shivam-enquiry-section .seq-side h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:24px !important;
    font-weight:800 !important;

    line-height:1.28 !important;

    letter-spacing:-.4px !important;
}


/* COPY */

#shivam-enquiry-section .seq-side-copy{
    margin:
        12px
        0
        0 !important;

    color:var(--text) !important;

    font-size:14px !important;
    line-height:1.68 !important;
}


/* =========================================================
   DETAILS
========================================================= */

#shivam-enquiry-section .seq-details{
    margin-top:23px !important;

    border-top:
        1px solid
        rgba(0,22,65,.08) !important;
}


#shivam-enquiry-section .seq-detail{
    display:grid !important;

    grid-template-columns:
        38px
        minmax(0,1fr) !important;

    gap:11px !important;

    align-items:start !important;

    padding:
        15px
        0 !important;

    border-bottom:
        1px solid
        rgba(0,22,65,.07) !important;
}


/* ICON */

#shivam-enquiry-section .seq-detail-icon{
    width:36px !important;
    height:36px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:9px !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.16) !important;

    color:var(--green) !important;

    font-size:14px !important;
}


/* TITLE */

#shivam-enquiry-section .seq-detail strong{
    display:block !important;

    margin-bottom:3px !important;

    color:var(--blue) !important;

    font-size:13px !important;
    font-weight:800 !important;

    line-height:1.45 !important;
}


/* TEXT */

#shivam-enquiry-section .seq-detail span{
    display:block !important;

    color:#707984 !important;

    font-size:12.5px !important;

    line-height:1.55 !important;
}


/* =========================================================
   SIDE BOTTOM
========================================================= */

#shivam-enquiry-section .seq-side-foot{
    margin-top:23px !important;

    padding-top:15px !important;

    border-top:
        1px solid
        rgba(0,22,65,.08) !important;
}


#shivam-enquiry-section .seq-side-foot strong{
    display:block !important;

    color:var(--blue) !important;

    font-size:15px !important;
    font-weight:800 !important;
}


#shivam-enquiry-section .seq-side-foot span{
    display:block !important;

    margin-top:4px !important;

    color:#747D87 !important;

    font-size:12px !important;
}


/* =========================================================
   FORM AREA
========================================================= */

#shivam-enquiry-section .seq-form-area{
    width:100% !important;

    padding:
        32px
        32px
        34px !important;

    background:#FFFFFF !important;
}


/* FORM HEAD */

#shivam-enquiry-section .seq-form-head{
    margin-bottom:20px !important;
}


#shivam-enquiry-section .seq-form-head span{
    display:block !important;

    margin-bottom:6px !important;

    color:var(--green) !important;

    font-size:9.5px !important;
    font-weight:800 !important;

    letter-spacing:1.4px !important;

    text-transform:uppercase !important;
}


#shivam-enquiry-section .seq-form-head h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:24px !important;
    font-weight:800 !important;

    line-height:1.3 !important;
}


#shivam-enquiry-section .seq-form-head p{
    max-width:570px !important;

    margin:
        7px
        0
        0 !important;

    color:var(--text) !important;

    font-size:13.5px !important;

    line-height:1.62 !important;
}


/* =========================================================
   FLUENT FORM STYLING
========================================================= */

#shivam-enquiry-section
.seq-form-slot
.ff-el-group{
    margin-bottom:14px !important;
}


#shivam-enquiry-section
.seq-form-slot
.ff-el-input--label{
    margin-bottom:7px !important;
}


#shivam-enquiry-section
.seq-form-slot
.ff-el-input--label label{
    color:var(--blue) !important;

    font-family:'Manrope',sans-serif !important;

    font-size:13px !important;
    font-weight:700 !important;
}


/* INPUT */

#shivam-enquiry-section
.seq-form-slot
.ff-el-form-control{
    width:100% !important;

    min-height:47px !important;

    padding:
        11px
        13px !important;

    border:
        1px solid
        #DCE3E8 !important;

    border-radius:7px !important;

    background:#FAFBFC !important;

    color:#253044 !important;

    font-family:'Manrope',sans-serif !important;

    font-size:13.5px !important;

    outline:none !important;

    box-shadow:none !important;

    transition:
        border-color .25s ease,
        box-shadow .25s ease,
        background .25s ease !important;
}


#shivam-enquiry-section
.seq-form-slot
.ff-el-form-control:focus{
    border-color:
        rgba(30,113,44,.65) !important;

    background:#FFFFFF !important;

    box-shadow:
        0 0 0 3px
        rgba(30,113,44,.07) !important;
}


#shivam-enquiry-section
.seq-form-slot
textarea.ff-el-form-control{
    min-height:105px !important;

    resize:vertical !important;
}


/* SELECT */

#shivam-enquiry-section
.seq-form-slot
select.ff-el-form-control{
    cursor:pointer !important;
}


/* CHECKBOX / RADIO */

#shivam-enquiry-section
.seq-form-slot
input[type="checkbox"],
#shivam-enquiry-section
.seq-form-slot
input[type="radio"]{
    accent-color:var(--green) !important;
}


/* CHECK LABEL */

#shivam-enquiry-section
.seq-form-slot
.ff-el-form-check-label{
    color:#66717C !important;

    font-size:12.5px !important;
}


/* =========================================================
   SUBMIT BUTTON
========================================================= */

#shivam-enquiry-section
.seq-form-slot
.ff-btn,

#shivam-enquiry-section
.seq-form-slot
.ff-btn-submit,

#shivam-enquiry-section
.seq-form-slot
button[type="submit"]{
    min-height:48px !important;

    padding:
        0
        22px !important;

    border:0 !important;

    border-radius:7px !important;

    background:var(--blue) !important;

    color:#FFFFFF !important;

    font-family:'Manrope',sans-serif !important;

    font-size:13px !important;
    font-weight:700 !important;

    cursor:pointer !important;

    box-shadow:
        0 7px 18px
        rgba(0,22,65,.11) !important;

    transition:
        background .25s ease,
        transform .25s ease,
        box-shadow .25s ease !important;
}


#shivam-enquiry-section
.seq-form-slot
.ff-btn:hover,

#shivam-enquiry-section
.seq-form-slot
.ff-btn-submit:hover,

#shivam-enquiry-section
.seq-form-slot
button[type="submit"]:hover{
    background:var(--green) !important;

    color:#FFFFFF !important;

    transform:
        translateY(-2px) !important;

    box-shadow:
        0 10px 22px
        rgba(30,113,44,.16) !important;
}


/* ERROR */

#shivam-enquiry-section
.seq-form-slot
.text-danger{
    color:#B42318 !important;

    font-size:11px !important;
}


/* SUCCESS */

#shivam-enquiry-section
.seq-form-slot
.ff-message-success{
    padding:
        13px
        15px !important;

    border-radius:7px !important;

    border:
        1px solid
        rgba(30,113,44,.22) !important;

    background:
        rgba(30,113,44,.06) !important;

    color:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-enquiry-section{
        padding:
            43px
            18px
            46px !important;
    }


    #shivam-enquiry-section .seq-heading{
        font-size:34px !important;
    }


    #shivam-enquiry-section .seq-main{
        grid-template-columns:
            minmax(255px,.72fr)
            minmax(0,1.28fr) !important;
    }


    #shivam-enquiry-section .seq-side{
        padding:
            28px
            22px !important;
    }


    #shivam-enquiry-section .seq-form-area{
        padding:
            28px
            25px
            30px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-enquiry-section{
        padding:
            38px
            14px
            41px !important;
    }


    #shivam-enquiry-section .seq-header{
        margin-bottom:22px !important;
    }


    #shivam-enquiry-section .seq-label{
        font-size:9px !important;
    }


    #shivam-enquiry-section .seq-label::before,
    #shivam-enquiry-section .seq-label::after{
        width:18px !important;
    }


    #shivam-enquiry-section .seq-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-enquiry-section .seq-description{
        margin-top:10px !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-enquiry-section .seq-main{
        grid-template-columns:1fr !important;
    }


    #shivam-enquiry-section .seq-side{
        padding:
            24px
            19px !important;

        border-right:0 !important;

        border-bottom:
            1px solid
            rgba(0,22,65,.08) !important;
    }


    #shivam-enquiry-section .seq-side h3{
        font-size:21px !important;
    }


    #shivam-enquiry-section .seq-side-copy{
        font-size:13.5px !important;
    }


    #shivam-enquiry-section .seq-details{
        margin-top:18px !important;
    }


    #shivam-enquiry-section .seq-detail{
        padding:
            13px
            0 !important;
    }


    #shivam-enquiry-section .seq-form-area{
        padding:
            24px
            18px
            26px !important;
    }


    #shivam-enquiry-section .seq-form-head{
        margin-bottom:18px !important;
    }


    #shivam-enquiry-section .seq-form-head h3{
        font-size:21px !important;
    }


    #shivam-enquiry-section .seq-form-head p{
        font-size:13px !important;
    }


    #shivam-enquiry-section
    .seq-form-slot
    .ff-el-form-control{
        font-size:13px !important;
    }


    #shivam-enquiry-section
    .seq-form-slot
    .ff-btn,

    #shivam-enquiry-section
    .seq-form-slot
    .ff-btn-submit,

    #shivam-enquiry-section
    .seq-form-slot
    button[type="submit"]{
        width:100% !important;
    }

}

</style>


<section id="shivam-enquiry-section">

    <div class="seq-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="seq-header">


            <div class="seq-label">
                Uniform Enquiry
            </div>


            <h2 class="seq-heading">

                Tell Us What You

                <span>
                    Need
                </span>

            </h2>


            <p class="seq-description">

                Share a few details about your organisation and
                uniform requirement. Our team can then understand
                what you need and connect with you for the next step.

            </p>


        </div>



        <!-- =================================================
             MAIN
        ================================================== -->

        <div class="seq-main">


            <!-- LEFT INFO -->

            <aside class="seq-side">


                <div>


                    <span class="seq-side-small">
                        Before You Send
                    </span>


                    <h3>
                        A Few Basic Details Help Us Understand Better
                    </h3>


                    <p class="seq-side-copy">

                        You only need to share the essential information.
                        We can discuss fabric, style, fitting, quantity
                        and other details during the conversation.

                    </p>



                    <div class="seq-details">


                        <!-- 01 -->

                        <div class="seq-detail">

                            <div class="seq-detail-icon">
                                <i class="fa-solid fa-building"></i>
                            </div>

                            <div>

                                <strong>
                                    Organisation Type
                                </strong>

                                <span>
                                    School, corporate, industry,
                                    hospitality or service team.
                                </span>

                            </div>

                        </div>



                        <!-- 02 -->

                        <div class="seq-detail">

                            <div class="seq-detail-icon">
                                <i class="fa-solid fa-shirt"></i>
                            </div>

                            <div>

                                <strong>
                                    Uniform Category
                                </strong>

                                <span>
                                    Tell us what type of uniform
                                    you are looking for.
                                </span>

                            </div>

                        </div>



                        <!-- 03 -->

                        <div class="seq-detail">

                            <div class="seq-detail-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div>

                                <strong>
                                    Approximate Quantity
                                </strong>

                                <span>
                                    Share an estimated quantity
                                    if you already know it.
                                </span>

                            </div>

                        </div>


                    </div>


                </div>



                <div class="seq-side-foot">

                    <strong>
                        Shivam Uniform
                    </strong>

                    <span>
                        Ballabgarh, Faridabad
                    </span>

                </div>


            </aside>



            <!-- =================================================
                 RIGHT FORM
            ================================================== -->

            <div class="seq-form-area">


                <div class="seq-form-head">

                    <span>
                        Enquiry Details
                    </span>


                    <h3>
                        Share Your Requirement
                    </h3>


                    <p>
                        Fill in the form and our team can connect
                        with you regarding your uniform requirement.
                    </p>

                </div>



                <div class="seq-form-slot">

                   








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


        </div>


    </div>

</section>