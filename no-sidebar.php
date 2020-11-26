<?php
include 'head.php';
?>

<?php
include("db.php");
if (isset($_POST[submit])) {
    $sql = "INSERT INTO queries(name,email,phone,query) values('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]')";
    if ($qsql = mysqli_query($con, $sql)) {
        echo "<script>alert('Message Delivered.');</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

<!-- Main -->
<section id="main" class="wrapper style1">
    <header class="major">
        <h2>Contact Us</h2>
        <p>Drop Your Queries here!</p>
    </header>

    <div class="container">
        <section class="p-t-b-50">
            <!-- CONTACT FORM -->
            <div class="contact">
                <div class="contact-form">
                    <!-- FORM  -->
                    <form method="post" action="" name="frmdept" onSubmit="return validateform()">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="row" style="list-style-type:none;">
                                    <li class="col-sm-12">
                                        <label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                placeholder="Phone">
                                        </label>
                                    </li>
                                    <li class="col-sm-12">
                                        <label>
                                            <input type="text" class="form-control" name="message" id="message"
                                                placeholder="Message">
                                        </label>
                                    </li>
                                    <li class="col">
                                        <input class="button fit special" type="submit" name="submit" id="submit"
                                            value="submit" />
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <hr class="major" />
        <div class="row">
            <div class="6u">
                <section class="special">
                    <a href="#" class="image fit"><img src="images/FoodSafety_700pixFS.jpg" alt="" /></a>
                    <h3>Steps to maintain Food Safety</h3>
                    <p>Keep the refrigerator temperature at 4 degrees Celsius. This temperature is intended to prevent
                        the development of most pathogenic bacteria that may be in food.</p>
                    <p>Cool food down within a short time after cooking or consuming it to 4 degrees Celsius. Avoid
                        keeping food outside of the refrigerator for more than an hour. Cooked food should be cooled
                        down by various means, such as by immersing in a container with cold water, within two hours of
                        cooking it, to the temperature of the refrigerator.</p>
                    <p>It is recommended to use disposable paper towels in the kitchen. If non-disposable tea towels are
                        used, they should be washed frequently. Towels that are used to clean working surfaces that have
                        been in contact with food could become contaminated with bacteria, some of which are pathogenic
                        bacteria that convey diseases.</p>
                    <ul class="actions">
                        <li><a href="#" class="button alt">Learn More</a></li>
                    </ul>
                </section>
            </div>
            <div class="6u">
                <section class="special">
                    <a href="#" class="image fit"><img src="images/Short Food Safety Coaching.jpg" alt="" /></a>
                    <h3>Be Food Safe</h3>
                    <p>Wash hands with soap and water<br>
                        Wet hands with clean running water and apply soap. Use warm water if it is available. Rub hands
                        together to make a lather and scrub all parts of the hand for 20 seconds. Rinse hands thoroughly
                        and dry using a clean paper towel. If possible, use a paper towel to turn off the faucet.<br>
                        Sanitize surfaces
                        Surfaces should be washed with hot, soapy water. A solution of 1 tablespoon of unscented, liquid
                        chlorine bleach per gallon of water can be used to sanitize surfaces.<br>
                        Clean sweep refrigerated foods once a week
                        At least once a week, throw out refrigerated foods that should no longer be eaten. Cooked
                        leftovers should be discarded after 4 days; raw poultry and ground meats, 1 to 2 days.<br>
                        Clean the inside and the outside of appliances. Pay particular attention to buttons and handles
                        where cross-contamination to hands can occur.<br>
                        Rinse fresh vegetables and fruits under running water just before eating, cutting, or cooking.
                        Even if you plan to peel or cut the produce before eating, it is important to thoroughly rinse
                        it first to prevent microbes from transferring from the outside to the inside of the
                        produce.<br>
                        Separate foods when shopping
                        Place raw seafood, meat, and poultry in plastic bags. Store them below ready-to-eat foods in
                        your refrigerator.<br>

                        Separate foods when preparing and serving
                        Always use a clean cutting board for fresh produce and a separate one for raw seafood, meat, and
                        poultry. Never place cooked food back on the same plate or cutting board that previously held
                        raw food.<br></p>
                    <ul class="actions">
                        <li><a href="https://www.choosemyplate.gov/ten-tips-be-food-safe" class="button alt">Learn
                                More</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>


<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform() {
    if (document.frmdept.name.value == "") {
        alert("name should not be empty..");
        document.frmdept.name.focus();
        return false;
    } else if (!document.frmdept.name.value.match(alphaspaceExp)) {
        alert("name not valid..");
        document.frmdept.name.focus();
        return false;
    } else if (!document.frmdept.email.value.match(emailExp)) {
        alert("email not valid..");
        document.frmdept.email.focus();
        return false;
    } else if (!document.frmdept.phone.value.match(numericExpression)) {
        alert("phone number not valid..");
        document.frmdept.phone.focus();
        return false;
    } else {
        return true;
    }
}
</script>


<?php
include 'foot.php';
?>