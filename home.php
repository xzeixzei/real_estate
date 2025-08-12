<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Estates | Premium Real Estate Services</title>
    <meta name="description" content="Discover your dream home with Luxury Estates. We offer premium real estate services with personalized attention to find your perfect property.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#14213d',
                        primaryLight: '#fca311',
                        primaryDark: '#000000',
                        light: '#e5e5e5'
                    }
                }
            }
        }
    </script>
    <style>
        .font-cursive {
            font-family: 'Dancing Script', cursive;
        }
        .hero-image {
            background-image: linear-gradient(rgba(33, 37, 41, 0.7), rgba(33, 37, 41, 0.3)), url('https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            min-height: 70vh;
        }
        
        .property-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
        }
        
        @media (max-width: 768px) {
            .hero-image {
                min-height: 60vh;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-primary shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-2">
                <i class="fas fa-home text-2xl text-white"></i>
                <span class="text-xl font-bold text-white font-cursive">Serenity Estates</span>
            </a>
            
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-primaryLight font-medium hover:text-primaryLight transition">Home</a>
                <a href="#" class="text-white font-medium hover:text-primaryLight transition">Properties</a>
                <a href="#" class="text-white font-medium hover:text-primaryLight transition">About</a>
                <a href="#" class="text-white font-medium hover:text-primaryLight transition">Services</a>
                <a href="#" class="text-white font-medium hover:text-primaryLight transition">Blog</a>
                <a href="#" class="text-white font-medium hover:text-primaryLight transition">Contact</a>
            </div>
            
            <div class="hidden md:block">
                <button class="bg-navy text-white px-6 py-2 rounded-md hover:bg-opacity-90 transition">
                    <i class="fas fa-phone-alt mr-2"></i> Contact Us
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary py-4 px-4 shadow-lg">
            <a href="#" class="block py-2 text-primaryLight font-medium hover:text-primaryLight">Home</a>
            <a href="#" class="block py-2 text-white font-medium hover:text-primaryLight">Properties</a>
            <a href="#" class="block py-2 text-white font-medium hover:text-primaryLight">About</a>
            <a href="#" class="block py-2 text-white font-medium hover:text-primaryLight">Services</a>
            <a href="#" class="block py-2 text-white font-medium hover:text-primaryLight">Blog</a>
            <a href="#" class="block py-2 text-white font-medium hover:text-primaryLight">Contact</a>
            <button class="mt-2 w-full bg-primaryLight text-primary px-6 py-2 rounded-md hover:bg-opacity-90 transition">
                <i class="fas fa-phone-alt mr-2"></i> Contact Us
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-image flex items-center justify-center text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Find Your Dream Home Today</h1>
                <p class="text-xl mb-8">Discover premium properties in the most sought-after locations worldwide</p>
                
                <!-- Search Form -->
                <div class="bg-white rounded-lg shadow-xl p-6">
                    <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2 text-left">Location</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold text-gray-700">
                                <option>Any Location</option>
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Miami</option>
                                <option>Chicago</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2 text-left">Property Type</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold text-gray-700">
                                <option>Any Type</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Villa</option>
                                <option>Commercial</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2 text-left">Price Range</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold text-gray-700">
                                <option>Any Price</option>
                                <option>$100,000 - $300,000</option>
                                <option>$300,000 - $500,000</option>
                                <option>$500,000 - $1M</option>
                                <option>$1M+</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button class="w-full bg-primaryLight text-primary font-bold py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                                <i class="fas fa-search mr-2"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Featured Properties</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our handpicked selection of premium properties that match your lifestyle and aspirations</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property 1 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modern Luxury Villa" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primaryLight text-primary px-3 py-1 rounded-full text-sm font-bold">Featured</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-primary">Modern Luxury Villa</h3>
                            <span class="text-primary font-bold">$1,250,000</span>
                        </div>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-primaryLight mr-2"></i> Beverly Hills, CA</p>
                        <div class="flex justify-between text-gray-600 mb-6">
                            <span><i class="fas fa-bed text-gold mr-1"></i> 5 Beds</span>
                            <span><i class="fas fa-bath text-gold mr-1"></i> 4 Baths</span>
                            <span><i class="fas fa-ruler-combined text-gold mr-1"></i> 3,500 sq.ft</span>
                        </div>
                        <button class="w-full bg-navy text-white py-2 rounded-md hover:bg-opacity-90 transition">
                            View Property <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Property 2 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Downtown Penthouse" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-navy text-white px-3 py-1 rounded-full text-sm font-bold">New</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-navy">Downtown Penthouse</h3>
                            <span class="text-gold font-bold">$850,000</span>
                        </div>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-gold mr-2"></i> Manhattan, NY</p>
                        <div class="flex justify-between text-gray-600 mb-6">
                            <span><i class="fas fa-bed text-gold mr-1"></i> 3 Beds</span>
                            <span><i class="fas fa-bath text-gold mr-1"></i> 2.5 Baths</span>
                            <span><i class="fas fa-ruler-combined text-gold mr-1"></i> 2,200 sq.ft</span>
                        </div>
                        <button class="w-full bg-navy text-white py-2 rounded-md hover:bg-opacity-90 transition">
                            View Property <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Property 3 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Waterfront Estate" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">Hot Deal</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-navy">Waterfront Estate</h3>
                            <span class="text-gold font-bold">$2,750,000</span>
                        </div>
                        <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-gold mr-2"></i> Miami Beach, FL</p>
                        <div class="flex justify-between text-gray-600 mb-6">
                            <span><i class="fas fa-bed text-gold mr-1"></i> 6 Beds</span>
                            <span><i class="fas fa-bath text-gold mr-1"></i> 5.5 Baths</span>
                            <span><i class="fas fa-ruler-combined text-gold mr-1"></i> 5,800 sq.ft</span>
                        </div>
                        <button class="w-full bg-navy text-white py-2 rounded-md hover:bg-opacity-90 transition">
                            View Property <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-gold text-navy font-bold px-8 py-3 rounded-md hover:bg-opacity-90 transition">
                    View All Properties <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Our Team" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-navy mb-6">About Luxury Estates</h2>
                    <p class="text-gray-600 mb-6">Founded in 2005, Luxury Estates has established itself as a premier real estate agency specializing in high-end residential and commercial properties. Our team of experienced professionals is dedicated to providing exceptional service tailored to your unique needs.</p>
                    
                    <div class="mb-6">
                        <div class="flex items-start mb-4">
                            <div class="bg-gold bg-opacity-20 p-2 rounded-full mr-4">
                                <i class="fas fa-medal text-gold"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-navy mb-1">Our Mission</h3>
                                <p class="text-gray-600">To connect discerning clients with exceptional properties through integrity, expertise, and personalized service.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start mb-4">
                            <div class="bg-gold bg-opacity-20 p-2 rounded-full mr-4">
                                <i class="fas fa-eye text-gold"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-navy mb-1">Our Vision</h3>
                                <p class="text-gray-600">To be the most trusted and respected real estate brand in luxury markets worldwide.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gold bg-opacity-20 p-2 rounded-full mr-4">
                                <i class="fas fa-star text-gold"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-navy mb-1">Our Values</h3>
                                <p class="text-gray-600">Integrity, Excellence, Innovation, Client Focus, and Community Engagement.</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="bg-navy text-white px-6 py-3 rounded-md hover:bg-opacity-90 transition">
                        Learn More About Us <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-navy mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive real estate solutions tailored to your needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-home text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">Property Sales</h3>
                    <p class="text-gray-600 mb-4">Expert guidance through every step of buying or selling your property with maximum value.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-key text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">Property Rentals</h3>
                    <p class="text-gray-600 mb-4">Find your perfect rental property or list your property with our professional management services.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-building text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">Commercial Real Estate</h3>
                    <p class="text-gray-600 mb-4">Specialized services for commercial property investments, leasing, and development.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-search-dollar text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">Property Valuation</h3>
                    <p class="text-gray-600 mb-4">Accurate market valuations to help you make informed decisions about your property.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Service 5 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">Investment Consulting</h3>
                    <p class="text-gray-600 mb-4">Strategic advice for building and managing your real estate investment portfolio.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Service 6 -->
                <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition">
                    <div class="bg-gold bg-opacity-20 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-globe-americas text-2xl text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-4">International Properties</h3>
                    <p class="text-gray-600 mb-4">Global network providing access to exclusive properties in prime locations worldwide.</p>
                    <a href="#" class="text-gold font-medium hover:underline">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">Hear from our satisfied clients about their experiences with Luxury Estates</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white bg-opacity-10 p-8 rounded-lg backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah Johnson" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-gold text-sm">Home Buyer</p>
                        </div>
                    </div>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                    </div>
                    <p class="text-gray-300">"The team at Luxury Estates made my home buying experience seamless. Their attention to detail and market knowledge helped me find my dream home at the perfect price."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white bg-opacity-10 p-8 rounded-lg backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-gold text-sm">Property Investor</p>
                        </div>
                    </div>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                    </div>
                    <p class="text-gray-300">"As an international investor, I needed a reliable partner. Luxury Estates provided exceptional service, helping me build a profitable portfolio across three countries."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white bg-opacity-10 p-8 rounded-lg backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Emily Rodriguez</h4>
                            <p class="text-gold text-sm">Home Seller</p>
                        </div>
                    </div>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                        <i class="fas fa-star text-gold"></i>
                    </div>
                    <p class="text-gray-300">"I sold my property for 15% above market value thanks to Luxury Estates' strategic marketing and negotiation skills. Their professionalism exceeded all my expectations."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-primary text-white p-8">
                        <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
                        <p class="mb-6">Ready to find your dream property? Get in touch with our team of experts today.</p>
                        
                        <div class="mb-6">
                            <div class="flex items-start mb-4">
                                <i class="fas fa-map-marker-alt text-gold mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold">Our Office</h3>
                                    <p>123 Luxury Avenue, Suite 500<br>Beverly Hills, CA 90210</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start mb-4">
                                <i class="fas fa-phone-alt text-gold mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold">Phone</h3>
                                    <p>+1 (310) 555-1234</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-gold mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold">Email</h3>
                                    <p>info@luxuryestates.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 p-8">
                        <form>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold" id="name" type="text" placeholder="Your Name">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold" id="email" type="email" placeholder="Your Email">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold" id="phone" type="tel" placeholder="Your Phone Number">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gold" id="message" rows="4" placeholder="How can we help you?"></textarea>
                            </div>
                            
                            <button class="w-full bg-gold text-navy font-bold py-2 px-4 rounded-md hover:bg-opacity-90 transition" type="submit">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-navy mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6">Stay updated with the latest property listings, market trends, and exclusive offers.</p>
            
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-gold">
                <button class="bg-gold text-navy font-bold px-6 py-2 rounded-r-md hover:bg-opacity-90 transition">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-home text-gold mr-2"></i> Luxury Estates
                    </h3>
                    <p class="text-gray-300 mb-4">Premium real estate services for discerning clients worldwide.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-gold transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-gold transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-gold transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-gold transition"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Properties</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Services</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Property Sales</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Property Rentals</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Commercial Real Estate</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Property Valuation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">Investment Consulting</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-gold transition">International Properties</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Info</h3>
                    <address class="not-italic text-gray-300">
                        <p class="mb-2"><i class="fas fa-map-marker-alt text-gold mr-2"></i> 123 Luxury Avenue, Suite 500<br>Beverly Hills, CA 90210</p>
                        <p class="mb-2"><i class="fas fa-phone-alt text-gold mr-2"></i> +1 (310) 555-1234</p>
                        <p class="mb-2"><i class="fas fa-envelope text-gold mr-2"></i> info@luxuryestates.com</p>
                        <p><i class="fas fa-clock text-gold mr-2"></i> Mon-Fri: 9AM - 6PM</p>
                    </address>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 Luxury Estates. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gold text-sm transition">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-gold text-sm transition">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-gold text-sm transition">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Form submission handling
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to a server
                alert('Thank you for your message! We will contact you soon.');
                this.reset();
            });
        });
    </script>
</body>
</html>