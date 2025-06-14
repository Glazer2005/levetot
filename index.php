<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions Numériques</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6B00',
                        secondary: '#1f2937'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        .hero-section {
            background-image: url('https://public.readdy.ai/ai/img_res/cbf0827e2205c26f69e3611cd4848a90.jpg');
            background-size: cover;
            background-position:right ;
            background-repeat: no-repeat;
        }
    </style>

</head>
<body class="bg-white">
    <header class="fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
            <img src="../assets/images/PHOTO-2024-07-18-20-30-12.JPG" alt="LEVETOT" class="w-16 h-16 ">
                <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" data-readdy="true" class="text-gray-700 hover:text-primary transition-colors">Accueil</a>
<a href="Services-de-l'Entreprise-Numérique.html" class="text-primary font-medium">Services</a>
<a href="Portfolio-Détail-Projets.html" data-readdy="true" class="text-gray-700 hover:text-primary transition-colors">Portfolio</a>
<a href="blog.html" class="text-gray-700 hover:text-primary transition-colors">Blog</a>
<a href="contact.php" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
<a href="apropos.php" class="bg-primary text-white px-6 py-2 !rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap cursor-pointer">
                        À propos
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section min-h-screen flex items-center pt-20">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl">
                    <h1 class="text-5xl font-bold text-white mb-6">Solutions Numériques Innovantes</h1>
                    <p class="text-xl text-white mb-8">Transformez votre présence numérique avec nos services personnalisés de création web, installations technologiques, fabrication de porte-clés et solutions digitales.</p>
                    <div class="flex gap-4">
                        <a href="Services-de-l'Entreprise-Numérique.html">
                            <button class="bg-primary text-white px-8 py-3 !rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap cursor-pointer">
                                Découvrir nos services
                            </button>
                        </a>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Services</h2>
                    <p class="text-xl text-gray-600">Des solutions adaptées à vos besoins numériques</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                            <i class="ri-code-line text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Création de Sites Web</h3>
                        <p class="text-gray-600 mb-6">Sites web professionnels et responsive, optimisés pour tous les appareils.</p>
                        <a href="Services-de-l'Entreprise-Numérique.html" class="text-primary hover:text-primary/80 font-medium cursor-pointer">En savoir plus →</a>
                    </div>
                    
                    <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                            <i class="ri-store-2-line text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Boutique en Ligne</h3>
                        <p class="text-gray-600 mb-6">Solutions e-commerce complètes pour vendre vos produits en ligne.</p>
                        <a href="Services-de-l'Entreprise-Numérique.html" class="text-primary hover:text-primary/80 font-medium cursor-pointer">En savoir plus →</a>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                            <i class="ri-camera-line text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Installation de Caméras</h3>
                        <p class="text-gray-600 mb-6">Systèmes de surveillance professionnels pour votre sécurité.</p>
                        <a href="Services-de-l'Entreprise-Numérique.html" class="text-primary hover:text-primary/80 font-medium cursor-pointer">En savoir plus →</a>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                            <i class="ri-key-line text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Fabrication de Porte à Clé</h3>
                        <p class="text-gray-600 mb-6">Fabrication professionnelle et personnalisée de porte-clés.</p>
                        <a href="Services-de-l'Entreprise-Numérique.html" class="text-primary hover:text-primary/80 font-medium cursor-pointer">En savoir plus →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Portfolio</h2>
                    <p class="text-xl text-gray-600">Découvrez nos réalisations récentes</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                        <img src="https://public.readdy.ai/ai/img_res/70722341f6760fbc482c56a0c65304e2.jpg" 
                             alt="Site Web E-commerce" 
                             class="w-full h-64 object-cover transition-transform group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <h3 class="text-xl font-semibold mb-2">Site E-commerce Mode</h3>
                                <p>Boutique en ligne responsive</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                        <img src="https://public.readdy.ai/ai/img_res/c0789ea62401f3cb8d1824c92b028353.jpg" 
                             alt="Installation Caméras" 
                             class="w-full h-64 object-cover transition-transform group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <h3 class="text-xl font-semibold mb-2">Système de Surveillance</h3>
                                <p>Installation professionnelle</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                        <img src="https://public.readdy.ai/ai/img_res/c8fc60247900b1255ef75ab3809d6a8f.jpg" 
                             alt="Produits Numériques" 
                             class="w-full h-64 object-cover transition-transform group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <h3 class="text-xl font-semibold mb-2">Application Mobile</h3>
                                <p>Design et développement</p>
                            </div>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                        <img src="../assets/images/Porte-clef-metal-maison.jpg" 
                             alt="Installation Caméras" 
                             class="w-full h-64 object-cover transition-transform group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <h3 class="text-xl font-semibold mb-2">Fabrication de Porte à Clé</h3>
                                <p>professionnelle et personnalisées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Témoignages Clients</h2>
                    <p class="text-xl text-gray-600">Ce que nos clients disent de nous</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-4">
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Un service exceptionnel ! Notre site e-commerce a complètement transformé notre entreprise. Merci à toute l'équipe !"</p>
                        <div class="flex items-center">
                            <div>
                                <h4 class="font-semibold">Oumou Camara</h4>
                                <p class="text-gray-500 text-sm">Directrice Marketing</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-4">
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Installation professionnelle et service client impeccable. Je recommande vivement leurs services !"</p>
                        <div class="flex items-center">
                            <div>
                                <h4 class="font-semibold">Mansour Sow</h4>
                                <p class="text-gray-500 text-sm">Gérant, Sécurité Plus</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-4">
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Une équipe réactive et professionnelle. Nos attentes ont été dépassées !"</p>
                        <div class="flex items-center">
                            <div>
                                <h4 class="font-semibold">Saly Mbodji</h4>
                                <p class="text-gray-500 text-sm">CEO, Digital Solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-4">
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                            <i class="ri-star-fill text-primary"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Un service de qualité pour une modélisation performante"</p>
                        <div class="flex items-center">
                            <div>
                                <h4 class="font-semibold">Cheikh Sylla</h4>
                                <p class="text-gray-500 text-sm">Expert Informatique</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                    <p class="text-xl text-gray-600">Nous sommes là pour vous aider</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-gray-700 mb-2">Nom complet</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Message</label>
                                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary h-32" required></textarea>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white px-6 py-3 !rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap cursor-pointer">
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Informations de contact</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex items-center justify-center">
                                        <i class="ri-map-pin-line text-primary text-xl"></i>
                                    </div>
                                    <p class="text-gray-600">Université Iba Der Thiam de THIES,THIES,SENEGAL</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex items-center justify-center">
                                        <i class="ri-phone-line text-primary text-xl"></i>
                                    </div>
                                    <p class="text-gray-600">+221-77-367-10-46/+221-78-202-28-86</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex items-center justify-center">
                                        <i class="ri-mail-line text-primary text-xl"></i>
                                    </div>
                                    <p class="text-gray-600">levetotcom@gmail.sn</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Horaires d'ouverture</h3>
                            <div class="space-y-2">
                                <p class="text-gray-600">Lundi - Vendredi: 9h00 - 18h00</p>
                                <p class="text-gray-600">Samedi: 10h00 - 16h00</p>
                                <p class="text-gray-600">Dimanche: Fermé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-12">
<div class="container mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
<div>

<img src="../assets/images/PHOTO-2024-07-18-20-30-12.JPG" alt="LEVETOT">
<p class="text-gray-400">Solutions numériques innovantes pour votre entreprise</p>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Services</h4>
<ul class="space-y-2">
<li><a href="Services-de-l'Entreprise-Numérique.html" class="text-gray-400 hover:text-white transition-colors">Sites Web</a></li>
<li><a href="Services-de-l'Entreprise-Numérique.html" class="text-gray-400 hover:text-white transition-colors">E-commerce</a></li>
<li><a href="Services-de-l'Entreprise-Numérique.html" class="text-gray-400 hover:text-white transition-colors">Sécurité</a></li>
<li><a href="Services-de-l'Entreprise-Numérique.html" class="text-gray-400 hover:text-white transition-colors">Porte-clés</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Entreprise</h4>
<ul class="space-y-2">
<li><a href="index.php">Accueil</a></li>
<li><a href="Portfolio-Détail-Projets.html" class="text-gray-400 hover:text-white transition-colors">Portfolio</a></li>
<li><a href="Contact.php" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-semibold mb-4">Contact</h4>
<ul class="space-y-2">
<li class="flex items-center text-gray-400">
<i class="ri-map-pin-line mr-2"></i>
Université Iba Der Thiam de THIES,THIES,SENEGAL
</li>
<li class="flex items-center text-gray-400">
<i class="ri-phone-line mr-2"></i>
+221-77-367-10-46/+221-78-202-28-86
</li>
<li class="flex items-center text-gray-400">
<i class="ri-mail-line mr-2"></i>
levetotcom@gmail.sn
</li>
</ul>
</div>
</div>
<div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm">© 2025 Tous droits réservés</p>
<div class="flex space-x-6 mt-4 md:mt-0">
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<i class="ri-facebook-fill"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<i class="ri-twitter-fill"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<i class="ri-instagram-fill"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<i class="ri-linkedin-fill"></i>
</a>
</div>
</div>
</div>
</footer>
</body>
</html>
