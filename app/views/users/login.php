<?php require APPROOT . '/views/inc/header.php' ?>
<div class="flex bg-[#9ad0d0] justify-between items-center px-4">
    <img class="lg:h-[7vh] h-12 inline-block m-2" src="<?php echo URLROOT; ?>/img/logo.png" alt="Workflow">
    <div>
    <a href="<?php echo URLROOT;?>/users/login" class="p-[8px] w-fit h-fit text-center text-black text-xs font-medium bg-white rounded-full">Login</a>
    <a href="<?php echo URLROOT;?>/users/register" class="p-[8px] w-fit h-fit text-center text-white text-xs font-medium bg-black rounded-full hover:bg-white hover:text-black">SignUp</a>
  </div>
</div>

<div class=" lg:flex-row lg:justify-evenly lg:items-center lg:h-[90vh] flex flex-col items-center ">

        <img class="lg:w-2/5 w-4/5 " src="<?php echo URLROOT; ?>/img/Designimg.png" alt="">


        <section class="mb-8  ">
            <h1 class="text-[40px] p-12"> WELCOME </h1>
            <div class="border-2 border-black  flex flex-col items-center p-2 m-auto">

                <h1 class="font-semibold underline" id="heading">LOGIN IN YOUR ACCOUNT</h1><br>
                <form class="  flex flex-col items-center" action="<?php echo URLROOT;?>/users/login" method="post">
    
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="flex gap-2 items-center"><i class="fa-solid fa-envelope fa-lg"></i>
                        <input class="border-2 border-black rounded w-[250px] p-1 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" type="email" id="email" name="email" placeholder="Enter Email" ></br></br>
                        
                    </div><span class="invalid-feedback text-red-500"><?php echo $data['email_err']; ?></span>
                    <div class="flex gap-2 items-center"><i class="fa-solid fa-lock fa-lg"></i>
                        <input class="border-2 border-black rounded w-[250px] p-1 ?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" type="password" id="password" name="password" placeholder="ENTER Password"></br></br>
                        
                    </div><span class="invalid-feedback text-red-500"><?php echo $data['password_err']; ?></span>
                    <!-- <input class=" bg-teal-100 border-2 border-black rounded w-[285px] p-1" type="submit" id="btn" value="Login" name="submit" /> -->
                    <button type="submit" name="login" class=" text-center bg-teal-100 border-2 border-black rounded w-[285px] p-1">
                        LOGIN</button>
                </form>
                <h4>D'ont have an Account? <a class="text-red-600 underline" href="<?php echo URLROOT; ?>/users/register"> Sign Up</a></h4>
            </div>
        </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>