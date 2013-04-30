<?php include('header.php');?>


                <article>
                    <header>
                        <h1>Contact Me</h1>
                        <p>Fill out the form below or email me at <a href="mailto:hello@michaelkaminski.me">hello@michaelkaminski.me</a>.</p>
                    </header>
                    <section>
                        <form action="ProcessForm.php" method="post" class="clearfix">
    <div>
         <label for="name">Name:</label>
         <input type="text" name="name" id="name" value="" tabindex="1" />
    </div>
<div>
         <label for="name">Email:</label>
         <input type="text" name="email" id="email" value="" tabindex="1" />
    </div>
    
    
    <div>
        <label for="textarea">Message:</label>
        <textarea  name="textarea" id="textarea"></textarea>
    </div>
    
    <input name="redirect" type="hidden" value="thank-you.php">
<input name="recipient" type="hidden" value="0">

        <input type="submit" value="Submit" class="rulesubmit clearfix"/>

</form> 
                    </section>
                    <footer>
                        <h3>Freelance Work</h3>
                        <p>I am available for freelance work, if you are interested in becoming a client you can fill out my <a href="project.php">project worksheet</a>.</p>
                    </footer>
                </article>
                


<?php include('aside.php');?>

<?php include('footer.php');?>