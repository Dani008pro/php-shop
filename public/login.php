<!DOCTYPE html >
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./style.php"); ?>
    <title>Store | Login</title>

</head>
<body class="px-40">
    <div class="shop-item" style="left: 10%; animation-delay: 0s;">
        <svg class="shop-icon fill-black" width="60" height="60" viewBox="0 0 24 24" fill="#ff00cc">
            <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
        </svg>
    </div>
    <div class="shop-item" style="left: 30%; animation-delay: 3s;">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="#ff00cc" class="shop-icon stroke-black fill-transparent">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>          
    </div>
    <div class="shop-item" style="left: 70%; animation-delay: 6s;">
        <svg class="shop-icon fill-black" width="70" height="70" viewBox="0 0 24 24" fill="#00ffcc">
            <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
        </svg>
    </div>
    <div class="shop-item" style="left: 20%; animation-delay: 8s;">
        <svg class="shop-icon fill-black" width="55" height="55" viewBox="0 0 24 24" fill="#ff00cc">
            <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
        </svg>
    </div>
    <div class="shop-item" style="left: 50%; animation-delay: 5s;">
        <svg class="shop-icon fill-black" width="65" height="65" viewBox="0 0 24 24" fill="#3333ff">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z"/>
        </svg>
    </div>
    <div class="shop-item" style="left: 80%; animation-delay: 10s;">
        <svg class="shop-icon fill-black" width="60" height="60" viewBox="0 0 24 24" fill="#00ffcc">
            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
        </svg>
    </div>
    
    <div class="container mx-auto w-full  flex justify-center items-center h-screen">
        <form action="" class="border-none w-1/3 h-auto px-8 rounded-lg z-10 bg-[rgba(255,255,255,0.3)] backdrop-blur-xs backdrop-filter shadow-2xl shadow-[rgba(0,0,0,0.9)]" method="post">
            <h1 class="txt text-center 
             font-mono mb-8 font-bold text-3xl mt-8 text-red-800">Store</h1>
            <div class="space-y-2">
                <div class="w-full flex justify-center gap-2 flex-col">
                    <label for="name" class="txt  
                    ">Username:</label>
                    <input type="text"  class=" focus:shadow-2xl bg-white  focus:shadow-[rgba(255,255,255,0.8)] py-1 px-2 focus:scale-[1.03] transition-all outline-none   rounded-md "  name="username" required>
                </div>
                <div class="w-full flex justify-center gap-2 mb-20   flex-col">
                    <label for="pass" class="txt  
                    ">Password:</label>
                    <input type="text" class=" mb-4 focus:shadow-2xl bg-white focus:shadow-[rgba(255,255,255,0.8)] py-1 px-2 focus:scale-[1.03] transition-all outline-none  rounded-md "  name="password" required>
                </div>
                <div class="flex justify-between gap-4  mb-8">
                    <button type="submit" class="font-bold  w-1/2 bg-white p-2 rounded-lg   hover:bg-gray-200 transition-all duration-300 ease-in cursor-pointer outline-none">Login to Store</button>
                    <button type="submit" class="font-bold  w-1/2 bg-black text-white  rounded-lg  hover:bg-sky-800 transition-all duration-300 ease-in cursor-pointer outline-none">Signin to Store</button>                
                </div>
            </div>
        </form>
    </div>
</body>
</html>

