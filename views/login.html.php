<div class="h-[calc(var(--vh,1vh)_*_100)] w-full overflow-y-auto scrollbar">

    <!-- Login form container -->
    <div class="flex flex-col justify-center w-full max-w-[516px] px-[30px] mx-auto my-[150px]">

        <!-- Login form background -->
        <div class="rounded-6 mt-[25px] shadow-regular dark:shadow-xl bg-white dark:bg-[#111726]">
            <div class="p-[25px] text-center border-b border-regular dark:border-white/[.05] top">
                <!-- Heading for the login form -->
                <h2 class="text-18 font-semibold leading-[1] mb-0 text-dark dark:text-title-dark">Connectez-vous</h2>
            </div>

            <!-- Login form inputs and elements -->
            <div class="py-[30px] px-[40px]">
                <form id="admin-form">

                    <div class="mb-6">
                        <label for="email-username" class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">Email
                            Email</label>
                        <input type="text" name="email" id="email-username" class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary" placeholder="nom@example.com" autocomplete="off" value="">
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <label for="password" class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">
                            Mot de passe</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 end-0 flex items-center px-[15px]">
                                <input class="hidden js-password-toggle" id="toggle" type="checkbox">
                                <label class=" rounded cursor-pointer text-light text-[15px] js-password-label dark:text-subtitle-dark" for="toggle"><i class="uil uil-eye-slash"></i></label>
                            </div>
                            <input name="password" class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary js-password" id="password" type="password" value="" autocomplete="off" placeholder="Password">
                        </div>
                    </div>

                    <button type="submit" class="inline-flex items-center justify-center w-full h-[48px] text-14 rounded-6 font-medium bg-primary text-white cursor-pointer hover:bg-primary-hbr border-primary transition duration-300" value="submit">Login</button>
                </form>

            </div>

        </div>
    </div>

</div>