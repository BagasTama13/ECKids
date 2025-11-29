<section id="features-section" class="py-20 relative bg-brand-brown overflow-hidden">
    <div class="container mx-auto px-6 text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white">Cara Kami Mengajar</h2>
    </div>
    
    <div class="container mx-auto px-6 bg-white p-8 rounded-3xl shadow-2xl ring-4 ring-brand-orange/50 border border-brand-orange"> 
        
        
        <div class="relative w-full overflow-hidden mb-6 flex justify-center">
            
            <button id="prev-slide" class="absolute left-4 top-1/2 z-20 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg transition hidden md:block">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            
            <div class="carousel-3d-stack-container w-full max-w-lg h-80 md:h-96" tabindex="0">
                <div id="image-carousel-stack" class="carousel-3d-stack-track" style="width: 100%;"> 
                    
                    
                    <div class="carousel-stack-item shadow-2xl rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80" alt="Anak-anak belajar 1" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-stack-item shadow-2xl rounded-xl overflow-hidden">
                        <img src="{{ asset('images/kids2.png') }}" alt="Anak-anak belajar 2" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-stack-item shadow-2xl rounded-xl overflow-hidden">
                        <img src="{{ asset('images/1.jpg') }}" alt="Anak-anak belajar 3" class="w-full h-full object-cover">
                    </div>
                    <div class="carousel-stack-item shadow-2xl rounded-xl overflow-hidden">
                        <img src="{{ asset('images/kids.png') }}" alt="Anak-anak belajar 4" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            
            <button id="next-slide" class="absolute right-4 top-1/2 z-20 -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg transition hidden md:block">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 border-t border-gray-100 mt-6"> 
            
            
            <div class="bg-gray-50 p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-[1.03] text-center">
                <div class="w-12 h-12 bg-red-100 text-kid-red rounded-full flex items-center justify-center text-xl mx-auto mb-3">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h3 class="text-md font-bold text-gray-800">Metode Seru</h3>
                <p class="text-gray-500 text-xs mt-1 hidden sm:block">Belajar sambil bermain (Gamification).</p>
            </div>
            
            
            <div class="bg-gray-50 p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-[1.03] text-center">
                <div class="w-12 h-12 bg-orange-100 text-brand-orange rounded-full flex items-center justify-center text-xl mx-auto mb-3">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="text-md font-bold text-gray-800">Tutor Ahli</h3>
                <p class="text-gray-500 text-xs mt-1 hidden sm:block">Pengajar profesional yang sabar.</p>
            </div>
            
            
            <div class="bg-gray-50 p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-[1.03] text-center">
                <div class="w-12 h-12 bg-green-100 text-kid-green rounded-full flex items-center justify-center text-xl mx-auto mb-3">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="text-md font-bold text-gray-800">Kurikulum Bersertifikat</h3>
                <p class="text-gray-500 text-xs mt-1 hidden sm:block">Kurikulum berstandar internasional.</p>
            </div>

            
            <div class="bg-gray-50 p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-[1.03] text-center">
                <div class="w-12 h-12 bg-blue-100 text-kid-blue rounded-full flex items-center justify-center text-xl mx-auto mb-3">
                    <i class="fas fa-smile-beam"></i>
                </div>
                <h3 class="text-md font-bold text-gray-800">Anak Gembira</h3>
                <p class="text-gray-500 text-xs mt-1 hidden sm:block">Lingkungan belajar yang positif.</p>
            </div>
        </div>
        
    </div>
</section>