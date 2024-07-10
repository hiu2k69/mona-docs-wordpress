<?php
   /**
    * Template Name: monad-learning
    */
   
   // Exit if accessed directly.
   if (!defined("ABSPATH")) {
       exit();
   }
   
   get_header();
   ?>
   <style>
      .header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 100%;
    margin: 0 auto;
    padding: 0 2rem;
    width: 100%;
    box-sizing: border-box;
}
nav#site-navigation {
    position: absolute;
    right: 18%;
}
   </style>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
<script type="text/javascript">
   window.tailwind.config = {
   	darkMode: ['class'],
   	theme: {
   		extend: {
   			colors: {
   				border: 'hsl(var(--border))',
   				input: 'hsl(var(--input))',
   				ring: 'hsl(var(--ring))',
   				background: 'hsl(var(--background))',
   				foreground: 'hsl(var(--foreground))',
   				primary: {
   					DEFAULT: 'hsl(var(--primary))',
   					foreground: 'hsl(var(--primary-foreground))'
   				},
   				secondary: {
   					DEFAULT: 'hsl(var(--secondary))',
   					foreground: 'hsl(var(--secondary-foreground))'
   				},
   				destructive: {
   					DEFAULT: 'hsl(var(--destructive))',
   					foreground: 'hsl(var(--destructive-foreground))'
   				},
   				muted: {
   					DEFAULT: 'hsl(var(--muted))',
   					foreground: 'hsl(var(--muted-foreground))'
   				},
   				accent: {
   					DEFAULT: 'hsl(var(--accent))',
   					foreground: 'hsl(var(--accent-foreground))'
   				},
   				popover: {
   					DEFAULT: 'hsl(var(--popover))',
   					foreground: 'hsl(var(--popover-foreground))'
   				},
   				card: {
   					DEFAULT: 'hsl(var(--card))',
   					foreground: 'hsl(var(--card-foreground))'
   				},
   			},
   		}
   	}
   }
</script>
<style type="text/tailwindcss">
   @layer base {
   :root {
   --background: 0 0% 100%;
   --foreground: 240 10% 3.9%;
   --card: 0 0% 100%;
   --card-foreground: 240 10% 3.9%;
   --popover: 0 0% 100%;
   --popover-foreground: 240 10% 3.9%;
   --primary: 240 5.9% 10%;
   --primary-foreground: 0 0% 98%;
   --secondary: 240 4.8% 95.9%;
   --secondary-foreground: 240 5.9% 10%;
   --muted: 240 4.8% 95.9%;
   --muted-foreground: 240 3.8% 46.1%;
   --accent: 240 4.8% 95.9%;
   --accent-foreground: 240 5.9% 10%;
   --destructive: 0 84.2% 60.2%;
   --destructive-foreground: 0 0% 98%;
   --border: 240 5.9% 90%;
   --input: 240 5.9% 90%;
   --ring: 240 5.9% 10%;
   --radius: 0.5rem;
   }
   .dark {
   --background: 240 10% 3.9%;
   --foreground: 0 0% 98%;
   --card: 240 10% 3.9%;
   --card-foreground: 0 0% 98%;
   --popover: 240 10% 3.9%;
   --popover-foreground: 0 0% 98%;
   --primary: 0 0% 98%;
   --primary-foreground: 240 5.9% 10%;
   --secondary: 240 3.7% 15.9%;
   --secondary-foreground: 0 0% 98%;
   --muted: 240 3.7% 15.9%;
   --muted-foreground: 240 5% 64.9%;
   --accent: 240 3.7% 15.9%;
   --accent-foreground: 0 0% 98%;
   --destructive: 0 62.8% 30.6%;
   --destructive-foreground: 0 0% 98%;
   --border: 240 3.7% 15.9%;
   --input: 240 3.7% 15.9%;
   --ring: 240 4.9% 83.9%;
   }
   }
</style>
<section class="learn">
   <div class="container-fluid ">
      <div class="row">
         <div class="col-lg-2 relative  bg-090909">
            <div class="tab-container pt-5 ">
               <div class="tab active" data-target="monad-learning"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Learn about monad.svg" alt=""><h2 class="name-title ml-5 active">Learn about Monad</h2>
               </div>
               <div class="tab" data-target="tab2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Monad ecosystem.svg" alt=""><h2 class="name-title ml-5">Monad Ecosystem</h2>
               </div>
               <div class="tab" data-target="tab3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Community News.svg" alt=""><h2 class="name-title ml-5">Community News</h2>
               </div>
               <div class="tab" data-target="community-culture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Community culture.svg" alt=""><h2 class="name-title ml-5">Community Culture</h2>
               </div>
               <div class="tab" data-target="contribute"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/How to contribute.svg" alt=""><h2 class="name-title ml-5">How to Contribute</h2>
               </div>
               <div class="tab" data-target="tab6"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Artists and Gallery.svg" alt=""><h2 class="name-title ml-5">Artists and Gallery</h2>
               </div>
               <div class="tab" data-target="member"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Monad team members.svg" alt=""><h2 class="name-title ml-5">Monad Team Members</h2>
               </div>
               <div class="tab" data-target="tab8"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Monacomics.svg" alt=""><h2 class="name-title ml-5">Monacomics</h2>
               </div>
               <div class="tab" data-target="faq"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/FAQs.svg" alt=""><h2 class="name-title ml-5">FAQs</h2>
               </div>
            </div>
         
         </div>
         <div class="col-lg-8">
            <div class="tab-content mt-5">
               <div class="tab-pane active" id="monad-learning">
                  <div class="container">
                     <div class="flex justify-between items-center mb-4">
                        <h1 class="text-3xl font-bold text-white">Learn about monad</h1>
                        <div class="relative">
                           <input type="text" placeholder="Search" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                           <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                           <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                           </span>
                        </div>
                     </div>
                     <div class="row pb-5">
                        <?php for ($i = 1; $i <= 14; $i++) { ?>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                           <div class="box-last">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                              <div class="box-content-t1">
                                 <h2>10 funfacts in monad community</h2>
                                 <p>This is a place containing articles to help you understand monads and their technology; we will update regularly.</p>
                                 <span>4/7/2024</span>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab2">
                  <div class="p-3 from-blue-900 to-green-900 text-white min-h-screen">
                     <div class=" mx-auto">
                        <div class="flex justify-between items-center mb-4">
                           <h1 class="text-3xl font-bold text-white">Monad ecosystem</h1>

                           <div class="relative">
                              <input type="text" placeholder="Search" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                              <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                              <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                              </span>
                           </div>
                        </div>
                        <p class="text-sm text-purple-400 mb-6">Last updated: 15 June 2024</p>
                        <div class="overflow-x-auto">
                           <table class="min-w-full bg-black bg-opacity-50 rounded-lg">
                              <thead>
                                 <tr class="text-left border- border-zinc-700">
                                    <th class="py-3 px-4">Dapps</th>
                                    <th class="py-3 px-4">Field</th>
                                    <th class="py-3 px-4">Fund raise</th>
                                    <th class="py-3 px-4 text-center">Social accounts</th>
                                 </tr>
                              </thead>
                              <tbody id="table-body">
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="tab3">
                  <div class="container">
                     <div class="flex justify-between items-center mb-4">
                        <h1 class="text-3xl font-bold text-white">Community News</h1>
                        <div class="relative">
                           <input type="text" placeholder="Search" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                           <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                           <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                           </span>
                        </div>
                     </div>
                     <div class="row pb-5">
                        <?php for ($i = 1; $i <= 14; $i++) { ?>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                           <div class="box-last">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                              <div class="box-content-t1">
                                 <h2>10 funfacts in monad community</h2>
                                 <p>This is a place containing articles to help you understand monads and their technology; we will update regularly.</p>
                                 <span>4/7/2024</span>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="community-culture">
                  <div class="container">
                     <div class="flex justify-between items-center mb-4">
                        <h1 class="text-3xl font-bold text-white">Community culture</h1>
                        <div class="relative">
                           <input type="text" placeholder="Search" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                           <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                           <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                           </span>
                        </div>
                     </div>
                     <div class="row pb-5">
                        <?php for ($i = 1; $i <= 14; $i++) { ?>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                           <div class="box-last">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                              <div class="box-content-t1">
                                 <h2>10 funfacts in monad community</h2>
                                 <p>This is a place containing articles to help you understand monads and their technology; we will update regularly.</p>
                                 <span>4/7/2024</span>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="contribute">
                  <div class="container pb-5">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5">
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad: High-performance EVM blockchain</h1>
                     <p class="mt-4 p-content italic">You've probably heard about the Monad blockchain by now.</p>
                     <p class="mt-4 p-content italic">
                        Basically, it's a platform that takes the technological design of the blockchain and optimizes it for fast and reliable transaction processing, making it attractive for enterprise-level
                        applications and financial services.
                     </p>
                     <p class="mt-4 p-content italic">In this guide, we’ll explore Monad’s origin story and dive into its tech to highlight everything you need to know.</p>
                     <p class="mt-4 p-content italic mb-2">Let’s get right to it!</p>
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad origin story</h2>
                     <p class="mt-4 p-content">
                        Monad Labs was founded by <span class="text-muted-foreground">[Name]</span>, <span class="text-muted-foreground">[Name]</span>, and <span class="text-muted-foreground">[Name]</span> in 2022.
                     </p>
                     <p class="mt-4 p-content">
                        Before diving into the world of blockchain, both Keone and James spent eight years at <span class="text-muted-foreground">[Company]</span>. Here, Keone led a high-frequency trading (HFT) team,
                        and James built an ultra-low-latency trading system responsible for tens of billions of notional daily volume in major futures markets. Eunice was previously in trading at BofA Merrill Lynch,
                        and led product teams building enterprise trading systems at Broadway Technology, and payments and licensing at Shutterstock.
                     </p>
                     <p class="mt-4 p-content">
                        The trio founded Monad Labs after realizing that it's possible to implement a series of fundamental optimizations for Ethereum in general, and the Ethereum Virtual Machine (EVM) in particular.
                        These optimizations aimed to help the Ethereum ecosystem overcome the challenges it faced since its inception: modest throughput, high gas fees, and limited scalability.
                     </p>
                     <p class="mt-4 p-content">To solve for these limitations, Monad Labs built the Monad blockchain.</p>
                     <h1 class="text-2xl font-bold text-white text-foreground mt-3">What is Monad?</h2>
                     <p class="mt-4 p-content">
                        Monad is a cutting-edge Layer 1 blockchain that leverages the Ethereum Virtual Machine (EVM)—the software that powers the Ethereum blockchain, and all networks built on top of it.
                     </p>
                     <p class="mt-4 p-content">
                        This approach enables Monad to support all existing Ethereum smart contracts and applications without any need for modification. This compatibility is crucial for encouraging adoption among
                        Ethereum developers, who can migrate their applications to Monad with ease and without facing interoperability issues.
                     </p>
                     <p class="mt-4 p-content">
                        Having said that, Monad is attempting to build a more streamlined version of the EVM from the ground up. The goal is to address the EVM's shortcomings, which have led to scalability and
                        performance issues on the Ethereum blockchain, as well as relatively steep transaction costs.
                     </p>
                     <p class="mt-4 p-content">
                        For example, Ethereum only processes approximately 10 transactions per second (TPS), while the fastest EVM chain, Binance Chain, runs at approximately 200 TPS. As a comparison, Solana's true TPS
                        fluctuates between <span class="text-muted-foreground">[Number]</span>.
                     </p>
                     <p class="mt-4 p-content">
                        The limitations of EVM chains mainly boil down to the same weakness: sequential execution. Sequential execution, naturally, is highly inefficient; while parallelized execution is more powerful
                        and capable.
                     </p>
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5 mt-4">
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <div class="container">
                        <h2 class="title-last-post text-white text-left p-2">
                           - Last post -
                        </h2>
                        <div class="row pb-5">
                           <?php for ($i = 1; $i <= 4; $i++) { ?>
                           <div class="col-lg-6 col-md-6 col-12 mb-3">
                              <div class="box-last">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                                 <div class="box-content-t">
                                    <h2>10 funfacts in monad community</h2>
                                    <p>This is a place containing articles to help you understand monads and their technology; we will</p>
                                    <span>4/7/2024</span>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="member">
                  <div class="container pb-5">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5">
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad: High-performance EVM blockchain</h1>
                     <p class="mt-4 p-content italic">You've probably heard about the Monad blockchain by now.</p>
                     <p class="mt-4 p-content italic">
                        Basically, it's a platform that takes the technological design of the blockchain and optimizes it for fast and reliable transaction processing, making it attractive for enterprise-level
                        applications and financial services.
                     </p>
                     <p class="mt-4 p-content italic">In this guide, we’ll explore Monad’s origin story and dive into its tech to highlight everything you need to know.</p>
                     <p class="mt-4 p-content italic mb-2">Let’s get right to it!</p>
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad origin story</h2>
                     <p class="mt-4 p-content">
                        Monad Labs was founded by <span class="text-muted-foreground">[Name]</span>, <span class="text-muted-foreground">[Name]</span>, and <span class="text-muted-foreground">[Name]</span> in 2022.
                     </p>
                     <p class="mt-4 p-content">
                        Before diving into the world of blockchain, both Keone and James spent eight years at <span class="text-muted-foreground">[Company]</span>. Here, Keone led a high-frequency trading (HFT) team,
                        and James built an ultra-low-latency trading system responsible for tens of billions of notional daily volume in major futures markets. Eunice was previously in trading at BofA Merrill Lynch,
                        and led product teams building enterprise trading systems at Broadway Technology, and payments and licensing at Shutterstock.
                     </p>
                     <p class="mt-4 p-content">
                        The trio founded Monad Labs after realizing that it's possible to implement a series of fundamental optimizations for Ethereum in general, and the Ethereum Virtual Machine (EVM) in particular.
                        These optimizations aimed to help the Ethereum ecosystem overcome the challenges it faced since its inception: modest throughput, high gas fees, and limited scalability.
                     </p>
                     <p class="mt-4 p-content">To solve for these limitations, Monad Labs built the Monad blockchain.</p>
                     <h1 class="text-2xl font-bold text-white text-foreground mt-3">What is Monad?</h2>
                     <p class="mt-4 p-content">
                        Monad is a cutting-edge Layer 1 blockchain that leverages the Ethereum Virtual Machine (EVM)—the software that powers the Ethereum blockchain, and all networks built on top of it.
                     </p>
                     <p class="mt-4 p-content">
                        This approach enables Monad to support all existing Ethereum smart contracts and applications without any need for modification. This compatibility is crucial for encouraging adoption among
                        Ethereum developers, who can migrate their applications to Monad with ease and without facing interoperability issues.
                     </p>
                     <p class="mt-4 p-content">
                        Having said that, Monad is attempting to build a more streamlined version of the EVM from the ground up. The goal is to address the EVM's shortcomings, which have led to scalability and
                        performance issues on the Ethereum blockchain, as well as relatively steep transaction costs.
                     </p>
                     <p class="mt-4 p-content">
                        For example, Ethereum only processes approximately 10 transactions per second (TPS), while the fastest EVM chain, Binance Chain, runs at approximately 200 TPS. As a comparison, Solana's true TPS
                        fluctuates between <span class="text-muted-foreground">[Number]</span>.
                     </p>
                     <p class="mt-4 p-content">
                        The limitations of EVM chains mainly boil down to the same weakness: sequential execution. Sequential execution, naturally, is highly inefficient; while parallelized execution is more powerful
                        and capable.
                     </p>
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5 mt-4">
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <div class="container">
                        <h2 class="title-last-post text-white text-left p-2">
                           - Last post -
                        </h2>
                        <div class="row pb-5">
                           <?php for ($i = 1; $i <= 4; $i++) { ?>
                           <div class="col-lg-6 col-md-6 col-12 mb-3">
                              <div class="box-last">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                                 <div class="box-content-t">
                                    <h2>10 funfacts in monad community</h2>
                                    <p>This is a place containing articles to help you understand monads and their technology; we will</p>
                                    <span>4/7/2024</span>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="faq">
                  <div class="container pb-5">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5">
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad: High-performance EVM blockchain</h1>
                     <p class="mt-4 p-content italic">You've probably heard about the Monad blockchain by now.</p>
                     <p class="mt-4 p-content italic">
                        Basically, it's a platform that takes the technological design of the blockchain and optimizes it for fast and reliable transaction processing, making it attractive for enterprise-level
                        applications and financial services.
                     </p>
                     <p class="mt-4 p-content italic">In this guide, we’ll explore Monad’s origin story and dive into its tech to highlight everything you need to know.</p>
                     <p class="mt-4 p-content italic mb-2">Let’s get right to it!</p>
                     <h1 class="text-2xl font-bold text-white text-foreground">Monad origin story</h2>
                     <p class="mt-4 p-content">
                        Monad Labs was founded by <span class="text-muted-foreground">[Name]</span>, <span class="text-muted-foreground">[Name]</span>, and <span class="text-muted-foreground">[Name]</span> in 2022.
                     </p>
                     <p class="mt-4 p-content">
                        Before diving into the world of blockchain, both Keone and James spent eight years at <span class="text-muted-foreground">[Company]</span>. Here, Keone led a high-frequency trading (HFT) team,
                        and James built an ultra-low-latency trading system responsible for tens of billions of notional daily volume in major futures markets. Eunice was previously in trading at BofA Merrill Lynch,
                        and led product teams building enterprise trading systems at Broadway Technology, and payments and licensing at Shutterstock.
                     </p>
                     <p class="mt-4 p-content">
                        The trio founded Monad Labs after realizing that it's possible to implement a series of fundamental optimizations for Ethereum in general, and the Ethereum Virtual Machine (EVM) in particular.
                        These optimizations aimed to help the Ethereum ecosystem overcome the challenges it faced since its inception: modest throughput, high gas fees, and limited scalability.
                     </p>
                     <p class="mt-4 p-content">To solve for these limitations, Monad Labs built the Monad blockchain.</p>
                     <h1 class="text-2xl font-bold text-white text-foreground mt-3">What is Monad?</h2>
                     <p class="mt-4 p-content">
                        Monad is a cutting-edge Layer 1 blockchain that leverages the Ethereum Virtual Machine (EVM)—the software that powers the Ethereum blockchain, and all networks built on top of it.
                     </p>
                     <p class="mt-4 p-content">
                        This approach enables Monad to support all existing Ethereum smart contracts and applications without any need for modification. This compatibility is crucial for encouraging adoption among
                        Ethereum developers, who can migrate their applications to Monad with ease and without facing interoperability issues.
                     </p>
                     <p class="mt-4 p-content">
                        Having said that, Monad is attempting to build a more streamlined version of the EVM from the ground up. The goal is to address the EVM's shortcomings, which have led to scalability and
                        performance issues on the Ethereum blockchain, as well as relatively steep transaction costs.
                     </p>
                     <p class="mt-4 p-content">
                        For example, Ethereum only processes approximately 10 transactions per second (TPS), while the fastest EVM chain, Binance Chain, runs at approximately 200 TPS. As a comparison, Solana's true TPS
                        fluctuates between <span class="text-muted-foreground">[Number]</span>.
                     </p>
                     <p class="mt-4 p-content">
                        The limitations of EVM chains mainly boil down to the same weakness: sequential execution. Sequential execution, naturally, is highly inefficient; while parallelized execution is more powerful
                        and capable.
                     </p>
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss2.png" alt="" class="banner img-fluid mb-5 mt-4">
                     <p class="mt-4 p-content">
                        Solana, for example, leverages parallel execution to achieve higher transaction speeds. Monad Labs is adopting Solana's approach by introducing parallel execution as well, with the goal of
                        significantly increasing transaction speeds of the EVM, and consequently the Monad blockchain—making consumer-grade, decentralized applications possible.
                     </p>
                     <p class="mt-4 p-content">Currently, Monad is working on a testnet, with the mainnet launch scheduled for sometime in 2024.</p>
                     <div class="container">
                        <h2 class="title-last-post text-white text-left p-2">
                           - Last post -
                        </h2>
                        <div class="row pb-5">
                           <?php for ($i = 1; $i <= 4; $i++) { ?>
                           <div class="col-lg-6 col-md-6 col-12 mb-3">
                              <div class="box-last">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                                 <div class="box-content-t">
                                    <h2>10 funfacts in monad community</h2>
                                    <p>This is a place containing articles to help you understand monads and their technology; we will</p>
                                    <span>4/7/2024</span>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-1">
         <box class="disclaimer ">
                <div class="box-top">
                    <h1 class="title-disc text-white text-bold">Disclaimer</h1>
                    <p class="dis">
                    "No connect wallet on any site. We never provide any links that require connecting a wallet. If you see one, perhaps our site has been hacked."
                    </p>
                </div>
                <div class="box-bottom d-flex mt-2">
                <img aria-hidden="true" alt="chat-bubble" src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact.svg" />
                &nbsp;   &nbsp;  <span class="text-right text-white">Contact Us</span>
                </div>
            </box>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">
<script>
   $(document).ready(function() {
       $(".tab").click(function() {
           var targetId = $(this).data("target");
           $(".tab").removeClass("active");
           $(this).addClass("active");
   
           $(".tab-pane").removeClass("active");
           $("#" + targetId).addClass("active");
       });
   
       $('#search-input').on('focus', function() {
           $('#search-label').addClass('hidden');
       }).on('blur', function() {
           if ($(this).val() === '') {
               $('#search-label').removeClass('hidden');
           }
       });
   });
</script>
<script>
 const data = [
    { dapp: '', field: 'DE-fi', fund: '5M' },
    { dapp: '', field: 'Liquidity', fund: '5M' },
    { dapp: '', field: 'NFTs', fund: '-' },
    { dapp: '', field: 'Stablecoin', fund: '2M' },
    { dapp: '', field: 'NFTs', fund: '-' },
    { dapp: '', field: 'Stablecoin', fund: '-' },
    { dapp: '', field: 'DE-fi', fund: '-' },
    { dapp: '', field: 'Lending/borrow', fund: '-' },
];
   
   const tableBody = document.getElementById('table-body');
   
   data.forEach(row => {
     const tr = document.createElement('tr');
     tr.className = 'border-b border-zinc-700';
   
     tr.innerHTML = `
       <td class="py-3 px-4">${row.dapp}</td>
       <td class="py-3 px-4">${row.field}</td>
       <td class="py-3 px-4">${row.fund}</td>
       <td class="py-3 px-4 flex space-x-2 text-center just-content-center">
         <img aria-hidden="true" alt="globe" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (globe).svg" class="image-spacing">
         <img aria-hidden="true" alt="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (twitter).svg" class="image-spacing">
         <img aria-hidden="true" alt="discord" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (discord).svg" class="image-spacing">
       </td>
     `;
   
     tableBody.appendChild(tr);
   });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var url = window.location.pathname;

    var segments = url.split('/');
    var tabName = segments.filter(segment => segment !== '').pop();
    var tabToActivate = document.querySelector('.tab[data-target="' + tabName + '"]');

    if (tabToActivate) {
        var allTabs = document.querySelectorAll('.tab');
        allTabs.forEach(function(tab) {
            tab.classList.remove('active');
        });
        tabToActivate.classList.add('active');
    }
    var paneToActivate = document.querySelector('.tab-pane#' + tabName);

    if (paneToActivate) {
        var allPanes = document.querySelectorAll('.tab-pane');
        allPanes.forEach(function(pane) {
            pane.classList.remove('active');
        });
        paneToActivate.classList.add('active');
    }
});
</script>

