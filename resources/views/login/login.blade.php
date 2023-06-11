<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture | Your Favourite Meubel</title>

    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Kontainer start -->
    <section>

        <div class="flex justify-center items-center h-screen w-screen">

            <!-- Kontainer login start -->
            <div
                class="shadow-xl shadow-gray-400 flex justify-center items-center border border-orange-300 w-screen h-screen">

                <!-- Kontainer login kiri start -->
                <div
                    class="w-[30rem] h-[30rem] shadow-xl box-border flex rounded-md bg-gradient-to-r from-gray-100 to-white">
                </div>
                <!-- Kontainer login kiri end -->

                <!-- Kontainer login kanan start -->

                <div
                    class="w-[20rem] h-[30rem] bg-orange-500 shadow-xl box-border rounded-md flex flex-col items-center bg-gradient-to-r from-orange-300 to-orange-400">

                    <!-- foto profil start -->
                    <div class="h-28 w-28 bg-white rounded-full my-10 mx-10 flex justify-center items-center">

                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            class="h-[4rem] w-[4rem]">
                            <title>user-profile</title>
                            <path
                                d="M4 26.016q0 2.496 1.76 4.224t4.256 1.76h12q2.464 0 4.224-1.76t1.76-4.224q-0.448-2.688-2.112-4.928t-4.096-3.552q2.208-2.368 2.208-5.536v-4q0-3.296-2.336-5.632t-5.664-2.368-5.664 2.368-2.336 5.632v4q0 3.168 2.208 5.536-2.4 1.344-4.064 3.552t-2.144 4.928zM8 26.016q0.672-2.592 2.944-4.288t5.056-1.728 5.056 1.728 2.944 4.288q0 0.832-0.576 1.408t-1.408 0.576h-12q-0.832 0-1.44-0.576t-0.576-1.408zM12 12v-4q0-1.632 1.184-2.816t2.816-1.184 2.816 1.184 1.184 2.816v4q0 1.664-1.184 2.848t-2.816 1.152-2.816-1.152-1.184-2.848z">
                            </path>
                        </svg>


                    </div>

                    <!-- foto profil end -->

                    <!-- text start -->
                    <div class="mx-[50%]">

                        <form action="">
                            @csrf
                            <input type="text"
                                class="rounded-2xl border-none my-2 placeholder-black-300 focus:outline-none focus:ring-2 focus:ring-orange-50 focus:placeholder-white"
                                placeholder="Username" name="username">
                            <input type="text"
                                class="rounded-2xl border-none my-2 placeholder-black-300 focus:outline-none focus:ring-2 focus:ring-orange-50 focus:placeholder-white"
                                placehold	er="Password" name="password">

                            <button
                                class="w-[14rem] rounded-full bg-gradient-to-r from-yellow-200 to-white hover:bg-gradient-to-tr hover:from-white hover:to-yellow-200 my-10 ">Login</button>
                        </form>

                    </div>
                    <!-- text end -->
                    <div class="flex flex-row">


                        <a href="regristrasi" class="text-xs text-orange-700 hover:text-orange-200">Regristrasi</a>

                    </div>


                </div>
                <!-- Kontainer login kanan end -->

            </div>

        </div>
    </section>


    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>
