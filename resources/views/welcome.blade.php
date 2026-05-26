<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nyllereth Jimenez | Psicología Clínica y Bienestar Emocional</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Consultorio de psicología clínica para adultos, parejas y familias. Espacio seguro para ansiedad, estrés y bienestar emocional. Agenda tu cita virtual o presencial con la Dra. Nyllereth Jimenez.">
  <meta name="keywords" content="psicología, psicólogo, terapia virtual, ansiedad, estrés, bienestar, terapia de pareja, Nyllereth Jimenez">
  <meta name="author" content="Dra. Nyllereth Jimenez">
  
  <!-- Tailwind CSS Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              cream: '#FDFBF7',
              beige: '#F7F4EB',
              blue: '#4A6B82',
              'blue-light': '#E8F1F5',
              green: '#8FA89B',
              'green-light': '#EBF2EE',
              peach: '#E3A897',
              'peach-light': '#FBF0EC',
              dark: '#0F172A',
              cardDark: '#1E293B'
            }
          },
          fontFamily: {
            serif: ['Playfair Display', 'Georgia', 'serif'],
            sans: ['Outfit', 'Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  
  <!-- Custom Stylesheet -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-brand-cream text-slate-800 dark:bg-brand-dark dark:text-slate-100 min-h-screen flex flex-col transition-colors duration-300">

  <!-- ==========================================
     HEADER / NAVEGACIÓN
     ========================================== -->
  <header class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 navbar-scrolled" id="main-header">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <!-- Logotipo -->
      <a href="#home" class="flex items-center gap-3 group">
        <div class="w-10 h-10 rounded-full bg-brand-blue flex items-center justify-center text-white shadow-md group-hover:bg-brand-green transition-colors duration-300">
          <i data-lucide="heart-handshake" class="w-5 h-5"></i>
        </div>
        <div>
          <span class="block text-lg font-bold font-serif tracking-wide text-brand-blue dark:text-sky-400">Nyllereth Jimenez</span>
          <span class="block text-xs uppercase tracking-widest text-slate-500 dark:text-slate-400 -mt-1 font-semibold">Psicología Clínica</span>
        </div>
      </a>

      <!-- Menú de Escritorio -->
      <div class="hidden md:flex items-center gap-8 font-medium">
        <a href="#home" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Inicio</a>
        <a href="#sobre-mi" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Sobre Mí</a>
        <a href="#servicios" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Servicios</a>
        <a href="#testimonios" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Testimonios</a>
        <a href="#blog" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Blog</a>
        <a href="#contacto" class="hover:text-brand-blue dark:hover:text-sky-400 transition-colors">Contacto</a>
      </div>

      <!-- Acciones de Cabecera -->
      <div class="hidden md:flex items-center gap-4">
        <!-- Toggle Dark/Light Mode -->
        <button id="theme-toggle" class="p-2.5 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-300" aria-label="Cambiar tema">
          <i data-lucide="sun" id="sun-icon" class="w-5 h-5"></i>
          <i data-lucide="moon" id="moon-icon" class="w-5 h-5 hidden"></i>
        </button>
        
        <!-- Acceso Admin Rápido -->
        <a href="#admin" class="p-2.5 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-300" title="Panel de Administración">
          <i data-lucide="shield-alert" class="w-5 h-5"></i>
        </a>
        
        <a href="#reservar" class="btn-primary text-sm py-2 px-5">
          <span>Agendar Cita</span>
          <i data-lucide="calendar" class="w-4 h-4"></i>
        </a>
      </div>

      <!-- Botón de Menú Móvil -->
      <div class="flex items-center gap-3 md:hidden">
        <button id="theme-toggle-mobile" class="p-2.5 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-300" aria-label="Cambiar tema">
          <i data-lucide="sun" id="sun-icon-mobile" class="w-5 h-5"></i>
          <i data-lucide="moon" id="moon-icon-mobile" class="w-5 h-5 hidden"></i>
        </button>
        <a href="#admin" class="p-2.5 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300" title="Panel de Administración">
          <i data-lucide="shield-alert" class="w-5 h-5"></i>
        </a>
        <button id="mobile-menu-btn" class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-200" aria-label="Menú">
          <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
      </div>
    </nav>

    <!-- Menú Móvil Desplegable -->
    <div id="mobile-menu" class="hidden md:hidden bg-brand-cream dark:bg-brand-dark border-b border-slate-200 dark:border-slate-800 px-4 py-4 space-y-3 shadow-lg">
      <a href="#home" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Inicio</a>
      <a href="#sobre-mi" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Sobre Mí</a>
      <a href="#servicios" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Servicios</a>
      <a href="#testimonios" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Testimonios</a>
      <a href="#blog" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Blog</a>
      <a href="#contacto" class="mobile-nav-link block py-2 px-3 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Contacto</a>
      <div class="pt-2 border-t border-slate-200 dark:border-slate-800 flex gap-2">
        <a href="#reservar" class="btn-primary w-full justify-center">
          <span>Agendar Cita</span>
          <i data-lucide="calendar" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- ==========================================
     MAIN CONTENT (SPA VIEWS)
     ========================================== -->
  <main class="flex-grow pt-24 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 pb-12">

    <!-- 1. INICIO (HOME) -->
    <section id="home" class="spa-section active space-y-16 py-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Textos de Bienvenida -->
        <div class="lg:col-span-7 space-y-6 text-left animate-slide-up">
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue-light text-brand-blue dark:bg-sky-950 dark:text-sky-300 text-sm font-semibold tracking-wide">
            <i data-lucide="sparkles" class="w-4 h-4 text-brand-blue dark:text-sky-400"></i>
            Espacio de acompañamiento psicológico
          </span>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-slate-800 dark:text-white leading-tight">
            Encuentra calma, claridad y <span class="text-brand-blue dark:text-sky-400 italic">bienestar emocional</span>
          </h1>
          <p class="text-lg text-slate-600 dark:text-slate-300 max-w-2xl">
            Hola, soy la <strong>Dra. Nyllereth Jimenez</strong>. Ofrezco un espacio seguro y profesional para ayudarte a navegar momentos de ansiedad, estrés o cambios difíciles. Juntos trabajaremos para construir herramientas que promuevan tu paz interior y desarrollo personal.
          </p>
          
          <!-- Frase inspiradora destacada -->
          <div class="border-l-4 border-brand-green pl-4 py-2 bg-brand-beige dark:bg-slate-800 rounded-r-lg max-w-xl">
            <p class="font-serif italic text-slate-700 dark:text-slate-300">
              "El autoconocimiento es el primer paso hacia la libertad emocional y la paz interior."
            </p>
          </div>

          <div class="flex flex-wrap gap-4 pt-2">
            <a href="#reservar" class="btn-primary text-base px-8 py-3.5">
              <span>Agendar cita ahora</span>
              <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
            <a href="#sobre-mi" class="btn-secondary text-base px-8 py-3.5">
              <span>Conóceme más</span>
            </a>
          </div>
        </div>

        <!-- Imagen Hero premium (Glassmorphism & Relajación) -->
        <div class="lg:col-span-5 relative flex justify-center animate-fade-in">
          <div class="absolute -top-4 -left-4 w-72 h-72 bg-brand-blue-light dark:bg-sky-950/30 rounded-full blur-3xl -z-10"></div>
          <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-brand-peach-light dark:bg-rose-950/20 rounded-full blur-3xl -z-10"></div>
          
          <div class="relative w-full max-w-md rounded-2xl overflow-hidden shadow-premium border-4 border-white dark:border-slate-800">
            <!-- Representación estética abstracta de calma/naturaleza -->
            <div class="aspect-[4/5] bg-gradient-to-tr from-brand-blue-light via-brand-beige to-brand-green-light dark:from-sky-950 dark:via-slate-800 dark:to-emerald-950 flex flex-col items-center justify-center p-8 text-center text-slate-700 dark:text-slate-200">
              <!-- Elemento decorativo visual -->
              <div class="w-40 h-40 rounded-full bg-white/70 dark:bg-slate-700/60 backdrop-blur-md flex items-center justify-center mb-6 shadow-md border border-white/40">
                <i data-lucide="flower" class="w-20 h-20 text-brand-blue dark:text-sky-300 animate-spin-slow"></i>
              </div>
              <h3 class="text-2xl font-serif text-brand-blue dark:text-sky-300 mb-2">Tu espacio seguro</h3>
              <p class="text-sm text-slate-600 dark:text-slate-300 max-w-xs">
                Terapia integral diseñada para restaurar tu bienestar y equilibrio de forma personalizada.
              </p>
              
              <!-- Badge flotante de certificación -->
              <div class="absolute bottom-6 left-6 right-6 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md p-3.5 rounded-xl shadow-lg border border-white/40 dark:border-slate-700 flex items-center gap-3 text-left">
                <div class="w-10 h-10 rounded-full bg-brand-green-light dark:bg-emerald-950 flex items-center justify-center text-brand-green">
                  <i data-lucide="award" class="w-5 h-5"></i>
                </div>
                <div>
                  <span class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest">Psicóloga Certificada</span>
                  <span class="block text-sm font-semibold text-slate-800 dark:text-white">C.C 1005230764</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Características / Por qué elegirnos -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-6">
        <div class="p-6 bg-white dark:bg-brand-cardDark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md transition-shadow">
          <div class="w-12 h-12 rounded-xl bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue dark:text-sky-400 mb-4">
            <i data-lucide="shield-check" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Confidencialidad Total</h3>
          <p class="text-slate-600 dark:text-slate-300 text-sm">
            Código ético estricto y protección absoluta de tus datos personales e historia clínica según normativas de salud.
          </p>
        </div>
        <div class="p-6 bg-white dark:bg-brand-cardDark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md transition-shadow">
          <div class="w-12 h-12 rounded-xl bg-brand-green-light dark:bg-emerald-950 flex items-center justify-center text-brand-green mb-4">
            <i data-lucide="compass" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Enfoque Personalizado</h3>
          <p class="text-slate-600 dark:text-slate-300 text-sm">
            Terapia cognitivo-conductual estructurada y adaptada a tu propio ritmo y necesidades particulares.
          </p>
        </div>
        <div class="p-6 bg-white dark:bg-brand-cardDark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md transition-shadow">
          <div class="w-12 h-12 rounded-xl bg-brand-peach-light dark:bg-rose-950 flex items-center justify-center text-brand-peach mb-4">
            <i data-lucide="video" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Flexibilidad Virtual</h3>
          <p class="text-slate-600 dark:text-slate-300 text-sm">
            Sesiones seguras y encriptadas desde la comodidad de tu hogar mediante nuestra sala virtual integrada.
          </p>
        </div>
      </div>
    </section>

    <!-- 2. SOBRE MÍ -->
    <section id="sobre-mi" class="spa-section space-y-12 py-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Foto / Perfil Izquierdo -->
        <div class="lg:col-span-5 flex flex-col items-center">
          <div class="relative w-72 h-72 sm:w-80 sm:h-80 rounded-2xl overflow-hidden shadow-lg border-4 border-white dark:border-slate-800 mb-6 bg-brand-beige dark:bg-slate-800">
            <div class="w-full h-full bg-gradient-to-tr from-brand-peach-light via-brand-beige to-brand-blue-light dark:from-rose-950 dark:via-slate-800 dark:to-sky-950 flex items-center justify-center">
              <i data-lucide="user" class="w-36 h-36 text-brand-blue/40 dark:text-sky-300/40"></i>
            </div>
            <div class="absolute inset-0 bg-brand-blue/10"></div>
          </div>
          
          <h3 class="text-2xl font-serif text-slate-800 dark:text-white">Nyllereth Jimenez</h3>
          <p class="text-slate-500 dark:text-slate-400 font-semibold mb-4 uppercase tracking-widest text-xs">Psicóloga Clínica • CC 1005230764</p>
          
          <div class="flex gap-3 justify-center">
            <a href="#" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-brand-blue hover:text-white dark:bg-slate-800 dark:hover:bg-sky-400 dark:hover:text-slate-900 transition-colors flex items-center justify-center text-slate-600 dark:text-slate-300">
              <i data-lucide="linkedin" class="w-4 h-4"></i>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-brand-blue hover:text-white dark:bg-slate-800 dark:hover:bg-sky-400 dark:hover:text-slate-900 transition-colors flex items-center justify-center text-slate-600 dark:text-slate-300">
              <i data-lucide="instagram" class="w-4 h-4"></i>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-brand-blue hover:text-white dark:bg-slate-800 dark:hover:bg-sky-400 dark:hover:text-slate-900 transition-colors flex items-center justify-center text-slate-600 dark:text-slate-300">
              <i data-lucide="mail" class="w-4 h-4"></i>
            </a>
          </div>
        </div>

        <!-- Biografía y Pestañas Interactivas (Derecha) -->
        <div class="lg:col-span-7 space-y-6">
          <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Sobre Mí</span>
          <h2 class="text-3xl sm:text-4xl font-serif">Acompañándote en tu camino de crecimiento y sanación</h2>
          
          <p class="text-slate-600 dark:text-slate-300">
            Creo firmemente en una psicología humanizada, científica y empática. Mi objetivo es brindarte un espacio terapéutico libre de juicios, donde te sientas escuchado y comprendido en tu totalidad. Trabajo bajo enfoques basados en la evidencia científica para darte herramientas prácticas y duraderas.
          </p>

          <!-- Componente de Pestañas (Tabs) -->
          <div class="border-b border-slate-200 dark:border-slate-700 flex gap-6 pt-4 font-medium" id="sobre-mi-tabs">
            <button class="tab-btn active pb-3 text-slate-700 dark:text-slate-300" data-tab="estudios">Estudios y Certificaciones</button>
            <button class="tab-btn pb-3 text-slate-500 dark:text-slate-400" data-tab="experiencia">Especialidades</button>
            <button class="tab-btn pb-3 text-slate-500 dark:text-slate-400" data-tab="filosofia">Mi Enfoque</button>
          </div>

          <!-- Contenido de Pestañas -->
          <div id="tab-content-estudios" class="tab-content py-4 space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue flex-shrink-0">
                <i data-lucide="graduation-cap" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="font-bold text-slate-800 dark:text-white">Pregrado en Psicología Clínica</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">Universidad Nacional - Mención de Honor</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue flex-shrink-0">
                <i data-lucide="award" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="font-bold text-slate-800 dark:text-white">Especialización en Terapia Cognitivo-Conductual (TCC)</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">Instituto de Salud Mental y Ciencias del Comportamiento</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue flex-shrink-0">
                <i data-lucide="scroll" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="font-bold text-slate-800 dark:text-white">Certificación en Intervención de Ansiedad y Depresión</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">Asociación Internacional de Terapias de Tercera Generación</p>
              </div>
            </div>
          </div>

          <div id="tab-content-experiencia" class="tab-content hidden py-4 space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="p-4 bg-brand-beige dark:bg-slate-800 rounded-xl">
                <h4 class="font-bold text-brand-blue dark:text-sky-300 mb-1">Manejo de Ansiedad</h4>
                <p class="text-xs text-slate-600 dark:text-slate-300">Técnicas de regulación de crisis, pánico y control del estrés.</p>
              </div>
              <div class="p-4 bg-brand-beige dark:bg-slate-800 rounded-xl">
                <h4 class="font-bold text-brand-blue dark:text-sky-300 mb-1">Depresión y Estado de Ánimo</h4>
                <p class="text-xs text-slate-600 dark:text-slate-300">Reestructuración cognitiva y activación conductual progresiva.</p>
              </div>
              <div class="p-4 bg-brand-beige dark:bg-slate-800 rounded-xl">
                <h4 class="font-bold text-brand-blue dark:text-sky-300 mb-1">Terapia de Pareja y Relaciones</h4>
                <p class="text-xs text-slate-600 dark:text-slate-300">Resolución de conflictos, comunicación asertiva y apego seguro.</p>
              </div>
              <div class="p-4 bg-brand-beige dark:bg-slate-800 rounded-xl">
                <h4 class="font-bold text-brand-blue dark:text-sky-300 mb-1">Crecimiento y Autoestima</h4>
                <p class="text-xs text-slate-600 dark:text-slate-300">Procesos de autoconocimiento, resiliencia y metas de vida.</p>
              </div>
            </div>
          </div>

          <div id="tab-content-filosofia" class="tab-content hidden py-4 space-y-4">
            <blockquote class="border-l-4 border-brand-blue pl-4 py-1 text-slate-600 dark:text-slate-300 italic">
              "No somos lo que nos sucedió, somos lo que elegimos ser a partir de hoy."
            </blockquote>
            <p class="text-sm text-slate-600 dark:text-slate-300">
              Mi enfoque terapéutico integra las bases científicas del modelo <strong>Cognitivo-Conductual</strong> y los principios de la <strong>Psicología Humanista y Aceptación</strong>. Entiendo que cada mente es un universo único, por lo que mi labor no es aplicar fórmulas rígidas, sino caminar a tu lado para descubrir tus propias fortalezas y facilitar el cambio que anhelas.
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- 3. SERVICIOS -->
    <section id="servicios" class="spa-section space-y-12 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Nuestros Servicios</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Terapias y acompañamiento especializado</h2>
        <p class="text-slate-500 dark:text-slate-400">
          Ofrecemos diferentes modalidades de consulta adaptadas a tus circunstancias y etapa de vida.
        </p>
      </div>

      <!-- Grid de Tarjetas de Servicios -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">
        <!-- Servicio 1: Individual -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue mb-4">
              <i data-lucide="user" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Terapia Individual</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Un espacio íntimo y confidencial de autodescubrimiento para abordar ansiedad, depresión, toma de decisiones y desarrollo personal.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 50 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$120.000 COP / $40 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Terapia Individual')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>

        <!-- Servicio 2: Pareja -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-peach-light dark:bg-rose-950 flex items-center justify-center text-brand-peach mb-4">
              <i data-lucide="users-2" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Terapia de Pareja</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Acompañamiento enfocado en restaurar la comunicación, resolver dinámicas de conflicto, reconstruir la confianza y fortalecer la conexión emocional.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 60 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$150.000 COP / $50 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Terapia de Pareja')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>

        <!-- Servicio 3: Infantil -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-green-light dark:bg-emerald-950 flex items-center justify-center text-brand-green mb-4">
              <i data-lucide="smile" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Terapia Infantil</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Herramientas y soporte lúdico-terapéutico para niños. Manejo de miedos, timidez, impulsividad y pautas de crianza positiva para padres.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 45 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$110.000 COP / $35 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Terapia Infantil')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>

        <!-- Servicio 4: Familiar -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue mb-4">
              <i data-lucide="home" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Terapia Familiar</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Abordaje sistémico para mediar conflictos de convivencia familiar, cambios estructurales, duelos colectivos y apoyo a adolescentes.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 75 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$170.000 COP / $60 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Terapia Familiar')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>

        <!-- Servicio 5: Virtual -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-peach-light dark:bg-rose-950 flex items-center justify-center text-brand-peach mb-4">
              <i data-lucide="video" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Terapia Virtual (Internacional)</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Consultas en línea de alta seguridad. Acceso simplificado desde cualquier dispositivo, ideal para personas fuera de la ciudad o del país.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 50 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$100.000 COP / $30 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Terapia Virtual')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>

        <!-- Servicio 6: Ansiedad -->
        <div class="glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark">
          <div>
            <div class="w-12 h-12 rounded-xl bg-brand-green-light dark:bg-emerald-950 flex items-center justify-center text-brand-green mb-4">
              <i data-lucide="activity" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Orientación y Ansiedad</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm mb-4">
              Programa especializado para la deconstrucción y afrontamiento del estrés crónico, crisis de pánico y fobias complejas.
            </p>
          </div>
          <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div>
              <span class="block text-xs text-slate-400">Duración: 50 min</span>
              <span class="block text-sm font-bold text-brand-blue dark:text-sky-300">$120.000 COP / $40 USD</span>
            </div>
            <button onclick="selectServiceForBooking('Orientación y Ansiedad')" class="btn-primary text-xs py-2 px-4">
              <span>Reservar</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- 4 & 8. RESERVAS & PAGOS EN LÍNEA -->
    <section id="reservar" class="spa-section space-y-12 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Agenda tu sesión</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Sistema de Citas Online</h2>
        <p class="text-slate-500 dark:text-slate-400">
          Elige el servicio, selecciona el día y hora de tu agrado, y asegura tu cita de manera inmediata.
        </p>
      </div>

      <!-- Contenedor del Agendador -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Lado Izquierdo: Calendario y Horas (Paso 1) -->
        <div class="lg:col-span-8 bg-white dark:bg-brand-cardDark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 p-6 space-y-6">
          <div class="flex items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-4">
            <h3 class="text-lg font-bold flex items-center gap-2 text-slate-700 dark:text-white">
              <i data-lucide="calendar-days" class="w-5 h-5 text-brand-blue"></i>
              1. Selecciona Fecha y Hora
            </h3>
            <div class="flex items-center gap-2">
              <button id="prev-month-btn" class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300">
                <i data-lucide="chevron-left" class="w-4 h-4"></i>
              </button>
              <span id="calendar-month-year" class="font-serif font-bold text-slate-800 dark:text-white text-base">Mayo 2026</span>
              <button id="next-month-btn" class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300">
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
              </button>
            </div>
          </div>

          <!-- Calendario Dinámico -->
          <div id="booking-calendar-wrapper">
            <div class="calendar-container" id="booking-calendar">
              <!-- Renderizado dinámico en JS -->
            </div>
          </div>

          <!-- Selección de Horas -->
          <div class="space-y-3">
            <h4 class="text-sm font-semibold text-slate-600 dark:text-slate-400">Horarios disponibles para el día seleccionado:</h4>
            <div class="grid grid-cols-3 sm:grid-cols-4 gap-3" id="booking-time-slots">
              <!-- Renderizado dinámico en JS -->
            </div>
            <p id="no-slots-alert" class="text-sm text-brand-peach font-medium hidden">Por favor, selecciona una fecha para ver horarios disponibles.</p>
          </div>
        </div>

        <!-- Lado Derecho: Formulario de Reserva -->
        <div class="lg:col-span-4 bg-white dark:bg-brand-cardDark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 p-6 space-y-6">
          <h3 class="text-lg font-bold flex items-center gap-2 text-slate-700 dark:text-white border-b border-slate-100 dark:border-slate-800 pb-4">
            <i data-lucide="calendar" class="w-5 h-5 text-brand-blue"></i>
            Reserva tu cita
          </h3>

          <form id="booking-form" class="space-y-4">
            <div>
              <label for="booking-service" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Servicio</label>
              <select id="booking-service" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue" required>
                <option value="">-- Seleccionar Servicio --</option>
                <option value="Terapia Individual">Terapia Individual ($120.000 COP / $40 USD)</option>
                <option value="Terapia de Pareja">Terapia de Pareja ($150.000 COP / $50 USD)</option>
                <option value="Terapia Infantil">Terapia Infantil ($110.000 COP / $35 USD)</option>
                <option value="Terapia Familiar">Terapia Familiar ($170.000 COP / $60 USD)</option>
                <option value="Terapia Virtual">Terapia Virtual ($100.000 COP / $30 USD)</option>
                <option value="Orientación y Ansiedad">Orientación y Ansiedad ($120.000 COP / $40 USD)</option>
              </select>
            </div>

            <div>
              <label for="booking-name" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Nombre Completo</label>
              <input type="text" id="booking-name" placeholder="Ej. Juan Pérez" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue" required>
            </div>

            <div>
              <label for="booking-whatsapp" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Número de WhatsApp</label>
              <input type="tel" id="booking-whatsapp" placeholder="Ej. +57 300 123 4567" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue" required>
            </div>

            <div>
              <label for="booking-email" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Correo Electrónico</label>
              <input type="email" id="booking-email" placeholder="Ej. juan@correo.com" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue" required>
            </div>

            <div>
              <label for="booking-reason" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Motivo breve de la consulta</label>
              <textarea id="booking-reason" rows="3" placeholder="Ej. Siento mucho estrés laboral..." class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue resize-none"></textarea>
            </div>

            <div id="booking-summary-box" class="hidden p-4 rounded-xl bg-brand-blue-light dark:bg-sky-950 text-slate-700 dark:text-sky-300 text-xs space-y-1">
              <span class="block font-bold text-brand-blue dark:text-sky-300 uppercase tracking-widest text-[10px] mb-1">Detalle de tu reserva</span>
              <p><strong>Fecha:</strong> <span id="summary-date">21/05/2026</span></p>
              <p><strong>Hora:</strong> <span id="summary-time">09:00 AM</span></p>
              <p><strong>Modalidad:</strong> <span id="summary-type">Virtual / Presencial</span></p>
            </div>

            <button type="submit" class="btn-primary w-full justify-center text-sm py-3 mt-2">
              <span>Proceder al pago y confirmación</span>
              <i data-lucide="credit-card" class="w-4 h-4"></i>
            </button>
          </form>
        </div>

      </div>
    </section>

    <!-- PASARELA DE PAGOS MODAL / SIMULADOR -->
    <div id="payment-modal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden items-center justify-center p-4">
      <div class="bg-white dark:bg-brand-cardDark w-full max-w-lg rounded-2xl shadow-premium border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
        <!-- Encabezado Pasarela -->
        <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between bg-slate-50 dark:bg-slate-800/50">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center text-brand-blue">
              <i data-lucide="lock" class="w-5 h-5"></i>
            </div>
            <div>
              <h3 class="text-base font-bold text-slate-800 dark:text-white">Pago Seguro Online</h3>
              <p class="text-xs text-emerald-500 flex items-center gap-1 font-semibold">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Transacción encriptada
              </p>
            </div>
          </div>
          <button id="close-payment-btn" class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-800 text-slate-500">
            <i data-lucide="x" class="w-5 h-5"></i>
          </button>
        </div>

        <div class="p-6 space-y-6 flex-grow max-h-[75vh] overflow-y-auto">
          <!-- Paso 1: Elegir Método -->
          <div id="payment-step-methods" class="payment-step active space-y-4">
            <div class="p-4 rounded-xl bg-brand-beige dark:bg-slate-800 text-xs flex justify-between items-center text-slate-700 dark:text-slate-300">
              <div>
                <span class="block font-bold">Total a pagar:</span>
                <span class="text-lg font-bold text-brand-blue dark:text-sky-400" id="payment-amount">$120.000 COP</span>
              </div>
              <div class="text-right">
                <span class="block">Paciente: <strong id="payment-patient-name">Juan</strong></span>
                <span class="block">Cita: <strong id="payment-date-time">May 25 - 9:00 AM</strong></span>
              </div>
            </div>

            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Selecciona tu método de pago preferido:</h4>

            <!-- Grid de Métodos -->
            <div class="grid grid-cols-2 gap-4">
              <!-- Nequi -->
              <button onclick="selectPaymentMethod('nequi')" class="p-4 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-brand-blue dark:hover:border-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all flex flex-col items-center gap-2 group">
                <div class="w-10 h-10 rounded-full bg-fuchsia-100 flex items-center justify-center text-fuchsia-600 font-bold text-sm">N</div>
                <span class="text-xs font-bold text-slate-700 dark:text-slate-300">Nequi</span>
              </button>
              <!-- Daviplata -->
              <button onclick="selectPaymentMethod('daviplata')" class="p-4 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-brand-blue dark:hover:border-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all flex flex-col items-center gap-2 group">
                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-sm">D</div>
                <span class="text-xs font-bold text-slate-700 dark:text-slate-300">Daviplata</span>
              </button>
              <!-- PayPal -->
              <button onclick="selectPaymentMethod('paypal')" class="p-4 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-brand-blue dark:hover:border-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all flex flex-col items-center gap-2 group">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                  <i data-lucide="paypal" class="w-5 h-5"></i>
                </div>
                <span class="text-xs font-bold text-slate-700 dark:text-slate-300">PayPal</span>
              </button>
              <!-- Stripe / Tarjeta -->
              <button onclick="selectPaymentMethod('stripe')" class="p-4 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-brand-blue dark:hover:border-sky-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all flex flex-col items-center gap-2 group">
                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                  <i data-lucide="credit-card" class="w-5 h-5"></i>
                </div>
                <span class="text-xs font-bold text-slate-700 dark:text-slate-300">Tarjeta de Crédito</span>
              </button>
            </div>
          </div>

          <!-- Paso 2A: Simulación Nequi / Daviplata -->
          <div id="payment-step-transfer" class="payment-step space-y-4">
            <h4 class="text-sm font-bold text-slate-800 dark:text-white flex items-center gap-2">
              <button onclick="showPaymentStep('methods')" class="p-1 rounded hover:bg-slate-100"><i data-lucide="arrow-left" class="w-4 h-4"></i></button>
              Transferencia Directa <span id="transfer-method-name" class="capitalize font-extrabold text-brand-blue">Nequi</span>
            </h4>
            
            <div class="p-4 bg-slate-50 dark:bg-slate-800/70 border border-slate-100 dark:border-slate-700 rounded-2xl flex flex-col items-center text-center space-y-3">
              <p class="text-xs text-slate-600 dark:text-slate-300">Escanea el código QR de abajo o transfiere directamente a la cuenta indicada.</p>
              
              <!-- Representación de Código QR Mock -->
              <div class="w-36 h-36 bg-white p-2 rounded-lg border border-slate-200 flex items-center justify-center">
                <div class="w-32 h-32 border-4 border-slate-800 border-dashed rounded flex flex-col items-center justify-center text-slate-800">
                  <i data-lucide="qr-code" class="w-16 h-16 text-slate-800"></i>
                  <span class="text-[9px] uppercase tracking-widest font-black">Nyllereth</span>
                </div>
              </div>

              <div class="text-xs font-mono space-y-1">
                <p><strong>Número de Cuenta:</strong> <span class="text-brand-blue font-bold select-all">3001234567</span></p>
                <p><strong>Titular:</strong> Nyllereth Jimenez</p>
                <p><strong>C.C:</strong> 1005230764</p>
              </div>
            </div>

            <div class="space-y-2">
              <label for="transfer-ref" class="block text-xs font-semibold text-slate-500 uppercase tracking-wider">Código o Referencia de Transferencia</label>
              <input type="text" id="transfer-ref" placeholder="Ej. M1029481" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm focus:outline-none focus:border-brand-blue" required>
            </div>

            <button onclick="confirmMockPayment()" class="btn-primary w-full justify-center py-3">
              <span>Verificar y Registrar Cita</span>
              <i data-lucide="check-circle" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Paso 2B: Simulación Tarjeta (Stripe/PayPal) -->
          <div id="payment-step-card" class="payment-step space-y-4">
            <h4 class="text-sm font-bold text-slate-800 dark:text-white flex items-center gap-2">
              <button onclick="showPaymentStep('methods')" class="p-1 rounded hover:bg-slate-100"><i data-lucide="arrow-left" class="w-4 h-4"></i></button>
              Pago con Tarjeta de Crédito (Stripe)
            </h4>

            <div class="space-y-4">
              <div>
                <label for="card-holder" class="block text-xs font-semibold text-slate-500 uppercase">Nombre en la tarjeta</label>
                <input type="text" id="card-holder" placeholder="Ej. Juan Pérez" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-2.5 text-sm focus:outline-none focus:border-brand-blue" required>
              </div>
              
              <div>
                <label for="card-num" class="block text-xs font-semibold text-slate-500 uppercase">Número de Tarjeta</label>
                <div class="relative">
                  <input type="text" id="card-num" placeholder="4000 1234 5678 9010" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-2.5 pr-10 text-sm focus:outline-none focus:border-brand-blue font-mono" required>
                  <i data-lucide="credit-card" class="absolute right-3 top-3 w-5 h-5 text-slate-400"></i>
                </div>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="card-exp" class="block text-xs font-semibold text-slate-500 uppercase">Fecha Exp.</label>
                  <input type="text" id="card-exp" placeholder="MM/AA" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-2.5 text-sm focus:outline-none focus:border-brand-blue font-mono" required>
                </div>
                <div>
                  <label for="card-cvc" class="block text-xs font-semibold text-slate-500 uppercase">CVC</label>
                  <input type="password" id="card-cvc" placeholder="***" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-2.5 text-sm focus:outline-none focus:border-brand-blue font-mono" maxlength="4" required>
                </div>
              </div>
            </div>

            <button onclick="confirmMockPayment()" class="btn-primary w-full justify-center py-3 mt-4">
              <span>Pagar e Inscribir Cita</span>
              <i data-lucide="check-circle" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Paso 3: Éxito y Comprobante -->
          <div id="payment-step-success" class="payment-step text-center space-y-6">
            <div class="w-16 h-16 rounded-full bg-emerald-100 dark:bg-emerald-950 text-emerald-500 mx-auto flex items-center justify-center scale-110">
              <i data-lucide="check" class="w-8 h-8"></i>
            </div>
            
            <div class="space-y-2">
              <h3 class="text-2xl font-serif text-slate-800 dark:text-white">¡Cita Confirmada con Éxito!</h3>
              <p class="text-sm text-slate-500 dark:text-slate-400">Tu pago ha sido acreditado y tu espacio está reservado en nuestra agenda.</p>
            </div>

            <!-- Ficha / Recibo de Pago Digital -->
            <div class="p-6 rounded-2xl bg-brand-cream dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 text-left text-xs space-y-2 relative">
              <!-- Detalles del Recibo -->
              <span class="absolute top-4 right-4 bg-emerald-100 text-emerald-700 font-bold px-2 py-0.5 rounded text-[10px]">PAGADO</span>
              <span class="block font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest text-[9px] mb-2">Comprobante de Servicio</span>
              
              <p><strong>Paciente:</strong> <span id="voucher-patient">Juan Pérez</span></p>
              <p><strong>C.C:</strong> 1005230764 (Dr. Nyllereth J.)</p>
              <p><strong>Servicio:</strong> <span id="voucher-service">Terapia Individual</span></p>
              <p><strong>Fecha y Hora:</strong> <span id="voucher-datetime">Lunes 25 de Mayo • 09:00 AM</span></p>
              <p><strong>Código de Cita:</strong> <span id="voucher-code" class="font-mono font-bold text-brand-blue dark:text-sky-300 select-all">CIT-91823A</span></p>
              
              <div class="border-t border-slate-200 dark:border-slate-700 pt-3 flex justify-between font-bold text-sm text-slate-700 dark:text-slate-300">
                <span>Monto Pagado:</span>
                <span id="voucher-total">$120.000 COP</span>
              </div>
            </div>

            <!-- Botones de Acción Posterior -->
            <div class="flex flex-col sm:flex-row gap-3 pt-2">
              <!-- Notificaciones Mock -->
              <button onclick="downloadVoucherPDF()" class="btn-secondary w-full justify-center text-xs py-2 px-4">
                <i data-lucide="download" class="w-4 h-4"></i>
                <span>Descargar PDF</span>
              </button>
              
              <button onclick="sendConfirmationWhatsApp()" class="btn-primary w-full justify-center text-xs py-2 px-4 bg-green-600 text-white hover:bg-green-700 shadow-none">
                <i data-lucide="message-square" class="w-4 h-4"></i>
                <span>Enviar WhatsApp</span>
              </button>
            </div>
            
            <button onclick="closePaymentModalAndRedirect()" class="text-xs font-semibold text-brand-blue hover:underline block mx-auto pt-2">
              Volver al inicio de la página
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- 6. VIDEOCONFERENCIAS PRIVADAS (SALA VIRTUAL) -->
    <section id="sala-virtual" class="spa-section space-y-8 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Consulta Virtual Segura</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Sala de Videollamada Privada</h2>
        <p class="text-slate-500 dark:text-slate-400">
          Accede a tu sesión en línea de forma segura utilizando tu código de cita.
        </p>
      </div>

      <!-- Pantalla de Acceso Inicial a Videollamada -->
      <div id="video-auth-card" class="max-w-md mx-auto bg-white dark:bg-brand-cardDark p-8 rounded-2xl shadow-premium border border-slate-100 dark:border-slate-800 text-center space-y-6">
        <div class="w-16 h-16 rounded-full bg-brand-blue-light dark:bg-sky-950 text-brand-blue flex items-center justify-center mx-auto">
          <i data-lucide="video-off" class="w-8 h-8"></i>
        </div>
        
        <div class="space-y-2">
          <h3 class="text-xl font-bold">Ingresar a la Sesión</h3>
          <p class="text-xs text-slate-500 dark:text-slate-400">Por favor, introduce el código de cita generado en tu comprobante de reserva para iniciar.</p>
        </div>

        <div class="space-y-4 text-left">
          <div>
            <label for="video-code-input" class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Código de Cita</label>
            <input type="text" id="video-code-input" placeholder="Ej. CIT-91823" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-center text-base font-mono font-semibold focus:outline-none focus:border-brand-blue select-all" required>
          </div>
          <button onclick="authenticateVideoSession()" class="btn-primary w-full justify-center py-3">
            <span>Conectarse a la sesión</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
        </div>
        
        <!-- Acceso alternativo rápido para pruebas -->
        <p class="text-[10px] text-slate-400">¿Probando la plataforma? Puedes usar cualquier código (Ej. <strong class="select-all font-mono">DEMO</strong>) para abrir la sala.</p>
      </div>

      <!-- Interfaz Activa de Videollamada (Oculta al inicio) -->
      <div id="video-active-room" class="hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch h-[600px] lg:h-[650px]">
        
        <!-- Grid de Video (7 o 8 Columnas) -->
        <div class="lg:col-span-8 flex flex-col justify-between bg-slate-900 dark:bg-black rounded-3xl p-4 shadow-lg border border-slate-800 relative">
          
          <!-- Cabecera de Videollamada (Info y Temporizador) -->
          <div class="flex justify-between items-center bg-slate-950/65 backdrop-blur-md rounded-xl p-3 text-white absolute top-8 left-8 right-8 z-10">
            <div class="flex items-center gap-3">
              <div class="w-3 h-3 rounded-full bg-emerald-500 animate-ping"></div>
              <div class="text-xs">
                <span class="block font-bold">Sesión Virtual Protegida</span>
                <span class="block text-[10px] text-slate-400" id="video-session-title">Paciente: Juan Pérez • Dra. Nyllereth J.</span>
              </div>
            </div>
            
            <!-- Temporizador de 45:00 min -->
            <div class="flex items-center gap-2 bg-slate-800/80 px-3.5 py-1.5 rounded-lg border border-slate-700 font-mono text-sm font-bold text-brand-peach" id="session-timer-wrapper">
              <i data-lucide="timer" class="w-4 h-4"></i>
              <span id="session-timer-text">45:00</span>
            </div>
          </div>

          <!-- Ventanas de Video de Participantes -->
          <div class="video-grid flex-grow mt-16 mb-20 flex items-center justify-center">
            
            <!-- Feed del Profesional (Dra. Nyllereth) -->
            <div class="video-container active-speaker relative w-full h-full" id="psychologist-video-box">
              <!-- Animación simulada de video -->
              <div class="video-placeholder flex flex-col items-center justify-center p-4">
                <div class="w-20 h-20 rounded-full bg-brand-blue-light/20 flex items-center justify-center border-2 border-brand-blue mb-4">
                  <i data-lucide="user" class="w-10 h-10 text-brand-blue"></i>
                </div>
                <span class="block text-sm font-bold text-slate-200">Dra. Nyllereth Jimenez</span>
                <span class="block text-xs text-brand-blue font-semibold mt-1 flex items-center gap-1">
                  <span class="inline-block w-1.5 h-1.5 bg-brand-blue rounded-full animate-pulse"></span>
                  Conectada
                </span>
              </div>
              <video id="psychologist-webcam" class="video-feed hidden" autoplay muted loop playsinline></video>
              <div class="video-label">
                <i data-lucide="mic" class="w-3 h-3 text-emerald-400"></i>
                <span>Dra. Nyllereth Jimenez (Clínico)</span>
              </div>
            </div>

            <!-- Feed del Paciente (Usuario) -->
            <div class="video-container relative w-full h-full" id="patient-video-box">
              <!-- Cámara Local Real (si se aprueba el acceso) -->
              <video id="local-video" class="video-feed hidden" autoplay playsinline></video>
              
              <!-- Placeholder por defecto -->
              <div class="video-placeholder flex flex-col items-center justify-center p-4" id="local-video-placeholder">
                <div class="w-20 h-20 rounded-full bg-slate-700 flex items-center justify-center mb-4">
                  <i data-lucide="user-cog" class="w-10 h-10 text-slate-400"></i>
                </div>
                <span class="block text-sm font-bold text-slate-200" id="video-local-name">Paciente (Tú)</span>
                <span class="block text-xs text-slate-400 mt-1">Cámara apagada</span>
              </div>
              
              <div class="video-label">
                <i data-lucide="mic" class="w-3 h-3 text-emerald-400" id="local-audio-indicator"></i>
                <span id="local-video-label-name">Paciente (Tú)</span>
              </div>
            </div>

          </div>

          <!-- Barra de Herramientas de Control (Inferior) -->
          <div class="flex justify-center gap-4 bg-slate-950/65 backdrop-blur-md rounded-xl p-3 text-white absolute bottom-8 left-8 right-8 z-10">
            <!-- Botón Micrófono -->
            <button onclick="toggleLocalAudio()" id="btn-toggle-mic" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-slate-700 flex items-center justify-center text-white transition-colors" title="Activar/Silenciar Micrófono">
              <i data-lucide="mic" class="w-5 h-5" id="icon-mic-on"></i>
              <i data-lucide="mic-off" class="w-5 h-5 text-red-500 hidden" id="icon-mic-off"></i>
            </button>
            
            <!-- Botón Cámara -->
            <button onclick="toggleLocalVideo()" id="btn-toggle-cam" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-slate-700 flex items-center justify-center text-white transition-colors" title="Activar/Apagar Cámara">
              <i data-lucide="video" class="w-5 h-5 text-red-500 hidden" id="icon-cam-on"></i>
              <i data-lucide="video-off" class="w-5 h-5" id="icon-cam-off"></i>
            </button>

            <!-- Botón Compartir Pantalla -->
            <button onclick="toggleScreenShare()" id="btn-toggle-share" class="w-10 h-10 rounded-full bg-slate-800 hover:bg-slate-700 flex items-center justify-center text-white transition-colors" title="Compartir Pantalla">
              <i data-lucide="monitor" class="w-5 h-5"></i>
            </button>
            
            <!-- Botón Colgar / Salir -->
            <button onclick="exitVideoSession()" class="w-14 h-10 rounded-xl bg-red-600 hover:bg-red-700 flex items-center justify-center text-white transition-colors font-bold text-xs" title="Salir de la Consulta">
              <i data-lucide="phone-off" class="w-5 h-5 mr-1"></i>
              <span>Salir</span>
            </button>
          </div>

        </div>

        <!-- Chat de la sesión (4 Columnas) -->
        <div class="lg:col-span-4 bg-white dark:bg-brand-cardDark rounded-3xl border border-slate-100 dark:border-slate-800 flex flex-col justify-between overflow-hidden shadow-lg">
          <!-- Encabezado Chat -->
          <div class="p-4 border-b border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/40 flex items-center gap-2">
            <i data-lucide="message-square" class="w-5 h-5 text-brand-blue"></i>
            <h3 class="text-sm font-bold text-slate-800 dark:text-white">Chat en Tiempo Real</h3>
          </div>

          <!-- Historial de Chat -->
          <div class="flex-grow p-4 overflow-y-auto space-y-3 text-xs" id="video-chat-feed">
            <!-- Mensaje de bienvenida del sistema -->
            <div class="bg-brand-blue-light dark:bg-sky-950 p-2.5 rounded-xl text-slate-600 dark:text-sky-300">
              <p class="font-bold flex items-center gap-1"><i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Chat Encriptado</p>
              <p class="mt-0.5">La comunicación es segura y privada de punto a punto. Ningún dato se guarda fuera del navegador.</p>
            </div>
            
            <!-- Mensajes simulados -->
            <div class="space-y-1">
              <span class="block text-[10px] text-brand-blue dark:text-sky-400 font-bold">Dra. Nyllereth J. • 09:01 AM</span>
              <p class="bg-slate-100 dark:bg-slate-800 p-2 rounded-xl text-slate-700 dark:text-slate-300 max-w-[85%]">
                Hola, bienvenido a nuestro espacio virtual. ¿Cómo te encuentras hoy?
              </p>
            </div>
          </div>

          <!-- Caja de Entrada -->
          <form id="video-chat-form" class="p-3 border-t border-slate-100 dark:border-slate-800 flex gap-2">
            <input type="text" id="video-chat-input" placeholder="Escribe un mensaje..." class="flex-grow bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-brand-blue" required>
            <button type="submit" class="w-9 h-9 rounded-xl bg-brand-blue text-white flex items-center justify-center hover:bg-brand-green transition-colors">
              <i data-lucide="send" class="w-4.5 h-4.5"></i>
            </button>
          </form>
        </div>

      </div>
    </section>

    <!-- 7. PANEL ADMINISTRATIVO (DASHBOARD) -->
    <section id="admin" class="spa-section space-y-8 py-8">
      <div id="admin-login-card" class="bg-white dark:bg-brand-cardDark rounded-3xl shadow-lg border border-slate-200 dark:border-slate-800 p-8 max-w-3xl mx-auto">
        <div class="max-w-xl mx-auto space-y-4 text-center">
          <span class="text-brand-peach dark:text-red-400 uppercase tracking-widest text-xs font-bold block">Acceso Seguro</span>
          <h2 class="text-3xl font-serif text-slate-800 dark:text-white">Inicia sesión para ver el Dashboard</h2>
          <p class="text-slate-500 dark:text-slate-400 text-sm">Ingresa tus credenciales administrativas para acceder a la gestión de citas, pacientes y horarios.</p>
        </div>
        <form id="admin-login-form" class="mt-8 space-y-4 max-w-md mx-auto">
          <div>
            <label for="admin-login-user" class="block text-xs uppercase tracking-widest text-slate-500 dark:text-slate-400 mb-1">Usuario</label>
            <input id="admin-login-user" type="text" autocomplete="username" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl p-3 focus:outline-none focus:border-brand-blue" required>
          </div>
          <div>
            <label for="admin-login-pass" class="block text-xs uppercase tracking-widest text-slate-500 dark:text-slate-400 mb-1">Contraseña</label>
            <input id="admin-login-pass" type="password" autocomplete="current-password" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl p-3 focus:outline-none focus:border-brand-blue" required>
          </div>
          <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
            <span id="admin-login-error" class="text-rose-600 dark:text-rose-300 hidden"></span>
            <span>Usuario de prueba: admin</span>
          </div>
          <button type="submit" class="btn-primary w-full justify-center text-sm py-3">
            <span>Ingresar al Dashboard</span>
          </button>
        </form>
      </div>
      <div id="admin-panel-container" class="hidden">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200 dark:border-slate-800 pb-6">
        <div>
          <span class="text-brand-peach dark:text-red-400 uppercase tracking-widest text-xs font-bold block">Consola Profesional</span>
          <h2 class="text-3xl font-serif text-slate-800 dark:text-white" id="admin-welcome-title">Dashboard Administrativo</h2>
          <p class="text-xs text-slate-400 mt-1">Sesión: Nyllereth Jimenez (C.C 1005230764)</p>
        </div>
        
        <!-- Toggle Admin Lock / Controles rápidos -->
        <div class="flex items-center gap-3">
          <!-- Botón de Reset DB local (Útil para pruebas) -->
          <button onclick="resetLocalStorageDB()" class="text-xs font-bold text-slate-400 hover:text-red-500 flex items-center gap-1 border border-slate-200 dark:border-slate-700 px-3 py-1.5 rounded-xl hover:bg-red-50 dark:hover:bg-red-950/20 transition-all">
            <i data-lucide="rotate-ccw" class="w-3.5 h-3.5"></i>
            <span>Reiniciar BD</span>
          </button>
          <a href="#reservar" class="btn-primary text-xs py-2 px-4 shadow-none">
            <i data-lucide="plus" class="w-4 h-4"></i>
            <span>Nueva Cita</span>
          </a>
        </div>
      </div>

      <!-- Layout del Dashboard -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Menú Lateral del Admin (3 Columnas) -->
        <aside class="lg:col-span-3 bg-white dark:bg-brand-cardDark p-4 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 space-y-2">
          <div class="admin-sidebar-item active" data-admin-tab="resumen" onclick="switchAdminTab('resumen')">
            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
            <span>Resumen y Gráficos</span>
          </div>
          <div class="admin-sidebar-item" data-admin-tab="citas" onclick="switchAdminTab('citas')">
            <i data-lucide="calendar" class="w-5 h-5"></i>
            <span>Control de Citas</span>
          </div>
          <div class="admin-sidebar-item" data-admin-tab="pacientes" onclick="switchAdminTab('pacientes')">
            <i data-lucide="users-2" class="w-5 h-5"></i>
            <span>Historias Clínicas</span>
          </div>
          <div class="admin-sidebar-item" data-admin-tab="horarios" onclick="switchAdminTab('horarios')">
            <i data-lucide="settings" class="w-5 h-5"></i>
            <span>Horarios y Precios</span>
          </div>
        </aside>

        <!-- Contenido Central Dinámico (9 Columnas) -->
        <div class="lg:col-span-9 space-y-6">
          
          <!-- TAB 1: RESUMEN Y GRÁFICOS -->
          <div id="admin-tab-content-resumen" class="admin-tab-content space-y-6">
            <!-- 4 Tarjetas de Estadísticas Rápidas -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
              <div class="dashboard-stat-card">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">Citas Totales</span>
                  <div class="p-1 rounded bg-brand-blue-light text-brand-blue"><i data-lucide="calendar" class="w-4 h-4"></i></div>
                </div>
                <span class="text-2xl font-bold text-slate-800 dark:text-white" id="stat-total-citas">18</span>
                <span class="block text-[10px] text-emerald-500 font-semibold mt-1">+12% este mes</span>
              </div>
              <div class="dashboard-stat-card">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">Ingresos (Est.)</span>
                  <div class="p-1 rounded bg-brand-green-light text-brand-green"><i data-lucide="dollar-sign" class="w-4 h-4"></i></div>
                </div>
                <span class="text-2xl font-bold text-slate-800 dark:text-white" id="stat-ingresos">$2.160.000</span>
                <span class="block text-[10px] text-slate-400 mt-1">COP Acumulado</span>
              </div>
              <div class="dashboard-stat-card">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">Pacientes</span>
                  <div class="p-1 rounded bg-brand-peach-light text-brand-peach"><i data-lucide="users" class="w-4 h-4"></i></div>
                </div>
                <span class="text-2xl font-bold text-slate-800 dark:text-white" id="stat-pacientes">6</span>
                <span class="block text-[10px] text-emerald-500 font-semibold mt-1">4 Terapia Activa</span>
              </div>
              <div class="dashboard-stat-card">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">Tasa Retención</span>
                  <div class="p-1 rounded bg-emerald-100 text-emerald-600"><i data-lucide="sparkles" class="w-4 h-4"></i></div>
                </div>
                <span class="text-2xl font-bold text-slate-800 dark:text-white">92%</span>
                <span class="block text-[10px] text-slate-400 mt-1">Fidelización alta</span>
              </div>
            </div>

            <!-- Gráficos Estadísticos con pure SVG -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Gráfico A: Citas Mensuales (Barras SVG) -->
              <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 space-y-4">
                <div class="flex items-center justify-between border-b border-slate-50 dark:border-slate-800 pb-3">
                  <h3 class="text-sm font-bold text-slate-700 dark:text-slate-200">Volumen de Citas Mensuales</h3>
                  <span class="text-[10px] bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-slate-500">2026</span>
                </div>
                <!-- Gráfico de barras SVG -->
                <div class="relative pt-2 h-48 flex items-end justify-between font-mono text-[9px] text-slate-500">
                  <!-- Líneas de cuadrícula mock -->
                  <div class="absolute inset-x-0 bottom-6 border-b border-slate-100 dark:border-slate-800"></div>
                  <div class="absolute inset-x-0 bottom-16 border-b border-slate-100 dark:border-slate-800"></div>
                  <div class="absolute inset-x-0 bottom-28 border-b border-slate-100 dark:border-slate-800"></div>
                  
                  <!-- Barras SVG -->
                  <svg class="w-full h-full max-h-40" viewBox="0 0 240 100" preserveAspectRatio="none">
                    <!-- Ene -->
                    <rect x="10" y="70" width="20" height="30" class="chart-bar" rx="3" />
                    <!-- Feb -->
                    <rect x="50" y="55" width="20" height="45" class="chart-bar" rx="3" />
                    <!-- Mar -->
                    <rect x="90" y="40" width="20" height="60" class="chart-bar" rx="3" />
                    <!-- Abr -->
                    <rect x="130" y="25" width="20" height="75" class="chart-bar" rx="3" />
                    <!-- May -->
                    <rect x="170" y="10" width="20" height="90" class="chart-bar" rx="3" />
                    <!-- Jun -->
                    <rect x="210" y="35" width="20" height="65" class="chart-bar" rx="3" />
                  </svg>
                </div>
                <div class="flex justify-between text-[10px] text-slate-400 font-semibold px-2">
                  <span>Ene (3)</span>
                  <span>Feb (5)</span>
                  <span>Mar (6)</span>
                  <span>Abr (8)</span>
                  <span>May (10)</span>
                  <span>Jun (7)</span>
                </div>
              </div>

              <!-- Gráfico B: Ventas por Canal / Servicio (Circular SVG) -->
              <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 space-y-4">
                <div class="flex items-center justify-between border-b border-slate-50 dark:border-slate-800 pb-3">
                  <h3 class="text-sm font-bold text-slate-700 dark:text-slate-200">Distribución de Servicios</h3>
                  <span class="text-[10px] bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-slate-500">Popularidad</span>
                </div>
                
                <div class="flex items-center gap-6 py-2">
                  <!-- Círculo de porcentaje SVG -->
                  <div class="w-28 h-28 relative flex items-center justify-center flex-shrink-0">
                    <svg class="w-full h-full" viewBox="0 0 36 36">
                      <!-- Fondo círculo -->
                      <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="var(--bg-secondary)" stroke-width="3"></circle>
                      <!-- Terapia Individual (50%) -->
                      <circle class="circle-progress" cx="18" cy="18" r="15.915" fill="transparent" stroke="var(--color-accent-blue)" stroke-width="3.2" stroke-dasharray="50 50" stroke-dashoffset="0"></circle>
                      <!-- Terapia Pareja (30%) -->
                      <circle class="circle-progress" cx="18" cy="18" r="15.915" fill="transparent" stroke="var(--color-accent-green)" stroke-width="3.2" stroke-dasharray="30 70" stroke-dashoffset="-50"></circle>
                      <!-- Otras (20%) -->
                      <circle class="circle-progress" cx="18" cy="18" r="15.915" fill="transparent" stroke="var(--color-accent-peach)" stroke-width="3.2" stroke-dasharray="20 80" stroke-dashoffset="-80"></circle>
                    </svg>
                    <div class="absolute flex flex-col items-center">
                      <span class="text-lg font-bold text-slate-700 dark:text-slate-200">100%</span>
                      <span class="text-[8px] text-slate-400 uppercase tracking-widest font-black">Agenda</span>
                    </div>
                  </div>
                  
                  <!-- Leyendas -->
                  <div class="space-y-2 text-xs font-semibold">
                    <div class="flex items-center gap-2">
                      <span class="w-3 h-3 rounded-full bg-brand-blue inline-block"></span>
                      <span class="text-slate-600 dark:text-slate-300">Terapia Individual (50%)</span>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="w-3 h-3 rounded-full bg-brand-green inline-block"></span>
                      <span class="text-slate-600 dark:text-slate-300">Terapia Pareja (30%)</span>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="w-3 h-3 rounded-full bg-brand-peach inline-block"></span>
                      <span class="text-slate-600 dark:text-slate-300">Otros Servicios (20%)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- TAB 2: CONTROL DE CITAS -->
          <div id="admin-tab-content-citas" class="admin-tab-content hidden space-y-4">
            <h3 class="text-base font-bold text-slate-700 dark:text-white border-b border-slate-100 dark:border-slate-800 pb-2">Control General de Citas</h3>
            
            <div class="overflow-x-auto rounded-xl border border-slate-100 dark:border-slate-800">
              <table class="w-full text-left border-collapse text-xs">
                <thead>
                  <tr class="bg-slate-50 dark:bg-slate-800 text-slate-500 uppercase tracking-wider font-bold">
                    <th class="p-3">Paciente</th>
                    <th class="p-3">Servicio</th>
                    <th class="p-3">Fecha y Hora</th>
                    <th class="p-3">Estado</th>
                    <th class="p-3 text-right">Acciones</th>
                  </tr>
                </thead>
                <tbody id="admin-citas-tbody" class="divide-y divide-slate-100 dark:divide-slate-800">
                  <!-- Renderizado dinámico en JS -->
                </tbody>
              </table>
            </div>
          </div>

          <!-- TAB 3: HISTORIAS CLÍNICAS (PACIENTES) -->
          <div id="admin-tab-content-pacientes" class="admin-tab-content hidden space-y-4">
            <h3 class="text-base font-bold text-slate-700 dark:text-white border-b border-slate-100 dark:border-slate-800 pb-2">Pacientes e Historias Clínicas</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
              <!-- Lista de Pacientes (4 Columnas) -->
              <div class="md:col-span-4 bg-slate-50 dark:bg-slate-800/50 p-4 rounded-xl space-y-2 border border-slate-200/50" id="admin-pacientes-list">
                <!-- Renderizado dinámico en JS -->
              </div>
              
              <!-- Ficha Clínica Detallada (8 Columnas) -->
              <div class="md:col-span-8 bg-white dark:bg-brand-cardDark p-5 border border-slate-200/60 rounded-xl space-y-4 hidden" id="admin-paciente-profile-box">
                <div class="flex justify-between items-start border-b border-slate-100 dark:border-slate-800 pb-3">
                  <div>
                    <h4 class="text-base font-bold text-slate-800 dark:text-white" id="patient-detail-name">Juan Pérez</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">WhatsApp: <span id="patient-detail-phone">3001234567</span> | Correo: <span id="patient-detail-email">juan@correo.com</span></p>
                  </div>
                  <span class="text-[9px] bg-brand-blue-light text-brand-blue font-bold px-2 py-0.5 rounded-full uppercase tracking-wider" id="patient-detail-type">Adulto</span>
                </div>

                <!-- Historial de Notas Clínicas -->
                <div class="space-y-3">
                  <h5 class="text-xs font-bold text-slate-500 uppercase tracking-widest">Notas Clínicas Privadas (Protección de Confidencialidad)</h5>
                  <div class="bg-slate-50 dark:bg-slate-800 p-4 rounded-xl border border-slate-200/50 max-h-48 overflow-y-auto">
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-sans italic" id="patient-detail-notes">
                      No se han registrado notas clínicas previas. Puedes redactar una nueva nota de sesión en el formulario de abajo para el registro del historial clínico privado.
                    </p>
                  </div>
                </div>

                <!-- Formulario agregar Nota -->
                <form id="admin-note-form" class="space-y-3 pt-2">
                  <input type="hidden" id="patient-detail-id" value="">
                  <div>
                    <label for="admin-new-note" class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Añadir nueva nota clínica de sesión</label>
                    <textarea id="admin-new-note" rows="3" placeholder="Escribe el resumen clínico de la sesión... (Ej. Muestra avances en el control cognitivo de pensamientos rumiativos)" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-2.5 text-xs focus:outline-none focus:border-brand-blue resize-none" required></textarea>
                  </div>
                  <button type="submit" class="btn-primary text-xs py-2 px-4 shadow-none">
                    <i data-lucide="save" class="w-3.5 h-3.5"></i>
                    <span>Guardar Nota Clínica</span>
                  </button>
                </form>
              </div>

              <!-- Estado Vacío -->
              <div class="md:col-span-8 p-12 text-center text-slate-400 bg-slate-50 dark:bg-slate-800/20 rounded-xl border border-dashed border-slate-200 dark:border-slate-700" id="admin-pacientes-empty-box">
                <i data-lucide="users-2" class="w-12 h-12 mx-auto mb-2 text-slate-300"></i>
                <p class="text-xs">Selecciona un paciente de la lista lateral para cargar su expediente clínico e historial de notas privadas.</p>
              </div>
            </div>
          </div>

          <!-- TAB 4: CONFIGURACIÓN DE HORARIOS Y PRECIOS -->
          <div id="admin-tab-content-horarios" class="admin-tab-content hidden space-y-6">
            <h3 class="text-base font-bold text-slate-700 dark:text-white border-b border-slate-100 dark:border-slate-800 pb-2">Configuración del Consultorio</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Horarios Laborales -->
              <div class="bg-white dark:bg-brand-cardDark p-5 border border-slate-100 dark:border-slate-800 rounded-xl space-y-4">
                <h4 class="text-sm font-bold text-slate-700 dark:text-slate-200 flex items-center gap-2">
                  <i data-lucide="clock" class="w-4 h-4 text-brand-blue"></i>
                  Franja Horaria de Atención
                </h4>
                
                <form id="admin-hours-form" class="space-y-3 text-xs">
                  <div class="grid grid-cols-2 gap-4">
                    <div>
                      <label class="block text-[10px] text-slate-400 uppercase font-semibold mb-1">Hora Inicio</label>
                      <input type="time" id="config-start-time" value="08:00" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg p-2 focus:outline-none">
                    </div>
                    <div>
                      <label class="block text-[10px] text-slate-400 uppercase font-semibold mb-1">Hora Fin</label>
                      <input type="time" id="config-end-time" value="18:00" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg p-2 focus:outline-none">
                    </div>
                  </div>
                  
                  <div class="space-y-2">
                    <label class="block text-[10px] text-slate-400 uppercase font-semibold">Días de Atención Laboral</label>
                    <div class="grid grid-cols-3 gap-2">
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-lunes" checked> Lunes</label>
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-martes" checked> Martes</label>
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-miercoles" checked> Miércoles</label>
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-jueves" checked> Jueves</label>
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-viernes" checked> Viernes</label>
                      <label class="flex items-center gap-1.5"><input type="checkbox" id="day-sabado"> Sábado</label>
                    </div>
                  </div>

                  <button type="submit" class="btn-primary w-full justify-center text-xs py-2 shadow-none">
                    <span>Guardar Franja Horaria</span>
                  </button>
                </form>
              </div>

              <!-- Bloquear Fechas Especiales -->
              <div class="bg-white dark:bg-brand-cardDark p-5 border border-slate-100 dark:border-slate-800 rounded-xl space-y-4">
                <h4 class="text-sm font-bold text-slate-700 dark:text-slate-200 flex items-center gap-2">
                  <i data-lucide="calendar-off" class="w-4 h-4 text-brand-peach"></i>
                  Bloquear Fechas (Vacaciones/Feriados)
                </h4>
                
                <form id="admin-block-form" class="space-y-3 text-xs">
                  <div>
                    <label class="block text-[10px] text-slate-400 uppercase font-semibold mb-1">Fecha a bloquear</label>
                    <input type="date" id="block-date" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg p-2 focus:outline-none" required>
                  </div>
                  <div>
                    <label class="block text-[10px] text-slate-400 uppercase font-semibold mb-1">Motivo</label>
                    <input type="text" id="block-reason" placeholder="Ej. Congreso Médico o Vacaciones" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg p-2 focus:outline-none" required>
                  </div>

                  <button type="submit" class="btn-primary w-full justify-center text-xs py-2 shadow-none">
                    <span>Bloquear Fecha en Agenda</span>
                  </button>
                </form>

                <div class="space-y-1">
                  <span class="block text-[10px] text-slate-400 uppercase font-semibold">Fechas Bloqueadas:</span>
                  <div class="max-h-24 overflow-y-auto space-y-1" id="admin-blocked-dates-list">
                    <!-- Renderizado dinámico en JS -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </section>

    <!-- 9. TESTIMONIOS -->
    <section id="testimonios" class="spa-section space-y-12 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Opiniones de Pacientes</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Experiencias y Testimonios</h2>
        <p class="text-slate-500 dark:text-slate-400">
          La mayor satisfacción es ver el progreso de las personas que confían en nuestro acompañamiento.
        </p>
      </div>

      <!-- Testimoniales Elegant Cards (Masonry / Grid) -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm relative space-y-4">
          <div class="absolute -top-4 right-6 text-slate-200 dark:text-slate-800 font-serif text-6xl select-none">“</div>
          <div class="flex gap-1 text-amber-400"><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i></div>
          <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed italic">
            "Acudir a terapia con Nyllereth fue una de las mejores decisiones de mi vida. Me dio herramientas prácticas para controlar mi ansiedad laboral y me enseñó a tratarme con más compasión."
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-blue-light dark:bg-sky-950 flex items-center justify-center font-bold text-brand-blue">A</div>
            <div>
              <span class="block text-xs font-bold text-slate-800 dark:text-white">Andrea M.</span>
              <span class="block text-[10px] text-slate-400">Terapia Individual</span>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm relative space-y-4">
          <div class="absolute -top-4 right-6 text-slate-200 dark:text-slate-800 font-serif text-6xl select-none">“</div>
          <div class="flex gap-1 text-amber-400"><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i></div>
          <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed italic">
            "La terapia de pareja nos devolvió la capacidad de escucharnos. Nyllereth fue sumamente imparcial, empática y asertiva para guiarnos hacia la resolución de nuestros conflictos de convivencia."
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-green-light dark:bg-emerald-950 flex items-center justify-center font-bold text-brand-green">C</div>
            <div>
              <span class="block text-xs font-bold text-slate-800 dark:text-white">Carlos y Mariana</span>
              <span class="block text-[10px] text-slate-400">Terapia de Pareja</span>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm relative space-y-4">
          <div class="absolute -top-4 right-6 text-slate-200 dark:text-slate-800 font-serif text-6xl select-none">“</div>
          <div class="flex gap-1 text-amber-400"><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i></div>
          <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed italic">
            "Excelente profesional. La modalidad de videollamada de la plataforma es increíble, súper segura y rápida. Recomiendo plenamente su terapia para el manejo del estrés crónico."
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-brand-peach-light dark:bg-rose-950 flex items-center justify-center font-bold text-brand-peach">J</div>
            <div>
              <span class="block text-xs font-bold text-slate-800 dark:text-white">Jorge T.</span>
              <span class="block text-[10px] text-slate-400">Terapia Virtual</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 10. BLOG DE SALUD MENTAL -->
    <section id="blog" class="spa-section space-y-12 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">Recursos y Reflexiones</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Blog de Salud Mental</h2>
        <p class="text-slate-500 dark:text-slate-400">
          Artículos y pautas redactadas para ayudarte a comprender tus emociones en el día a día.
        </p>
      </div>

      <!-- Buscador y Categorías -->
      <div class="flex flex-col sm:flex-row items-center gap-4 justify-between bg-slate-50 dark:bg-slate-800/40 p-4 rounded-2xl border border-slate-100 dark:border-slate-800">
        <!-- Filtros Categoría -->
        <div class="flex flex-wrap gap-2 text-xs" id="blog-category-filters">
          <button onclick="filterBlogPosts('todas')" class="px-3.5 py-1.5 rounded-full bg-brand-blue text-white font-semibold transition-all" id="filter-all">Todas</button>
          <button onclick="filterBlogPosts('ansiedad')" class="px-3.5 py-1.5 rounded-full bg-slate-200 dark:bg-slate-700 hover:bg-brand-blue hover:text-white transition-all">Ansiedad y Estrés</button>
          <button onclick="filterBlogPosts('autoestima')" class="px-3.5 py-1.5 rounded-full bg-slate-200 dark:bg-slate-700 hover:bg-brand-blue hover:text-white transition-all">Autoestima</button>
          <button onclick="filterBlogPosts('relaciones')" class="px-3.5 py-1.5 rounded-full bg-slate-200 dark:bg-slate-700 hover:bg-brand-blue hover:text-white transition-all">Relaciones</button>
          <button onclick="filterBlogPosts('emociones')" class="px-3.5 py-1.5 rounded-full bg-slate-200 dark:bg-slate-700 hover:bg-brand-blue hover:text-white transition-all">Manejo Emocional</button>
        </div>

        <!-- Buscador Input -->
        <div class="relative w-full sm:w-64">
          <input type="text" id="blog-search-input" placeholder="Buscar artículo..." class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl pl-9 pr-3 py-2 text-xs focus:outline-none focus:border-brand-blue">
          <i data-lucide="search" class="absolute left-3 top-2.5 w-4 h-4 text-slate-400"></i>
        </div>
      </div>

      <!-- Listado de Artículos -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="blog-posts-grid">
        <!-- Renderizado dinámico en JS -->
      </div>
    </section>

    <!-- BLOG MODAL DE LECTURA -->
    <div id="blog-read-modal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden items-center justify-center p-4">
      <div class="bg-white dark:bg-brand-cardDark w-full max-w-2xl rounded-2xl shadow-premium border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col max-h-[85vh]">
        <!-- Cabecera lectura -->
        <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center bg-slate-50 dark:bg-slate-800/50">
          <div class="flex items-center gap-2 text-xs text-slate-400">
            <span class="bg-brand-blue-light text-brand-blue dark:bg-sky-950 font-bold px-2 py-0.5 rounded uppercase" id="blog-modal-category">ANSIEDAD</span>
            <span id="blog-modal-date">May 21, 2026</span>
          </div>
          <button id="close-blog-modal-btn" class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-800 text-slate-500">
            <i data-lucide="x" class="w-5 h-5"></i>
          </button>
        </div>

        <!-- Cuerpo del Artículo -->
        <div class="p-6 space-y-4 overflow-y-auto flex-grow text-slate-700 dark:text-slate-200 font-sans leading-relaxed">
          <h2 class="text-2xl sm:text-3xl font-serif text-slate-800 dark:text-white" id="blog-modal-title">Título del Artículo</h2>
          <div class="border-b border-slate-100 dark:border-slate-800 pb-4 flex items-center gap-3 text-xs">
            <div class="w-8 h-8 rounded-full bg-brand-peach-light dark:bg-rose-950 flex items-center justify-center font-bold text-brand-peach">NJ</div>
            <div>
              <span class="block font-bold">Por Dra. Nyllereth Jimenez</span>
              <span class="block text-slate-400">Lectura: 5 min • CC 1005230764</span>
            </div>
          </div>
          
          <div class="space-y-4 text-sm" id="blog-modal-body">
            <!-- Renderizado dinámico en JS -->
          </div>
        </div>
      </div>
    </div>

    <!-- 11. CONTACTO -->
    <section id="contacto" class="spa-section space-y-12 py-8">
      <div class="text-center max-w-2xl mx-auto space-y-3">
        <span class="text-brand-blue dark:text-sky-400 uppercase tracking-widest text-xs font-bold block">¿Hablamos?</span>
        <h2 class="text-3xl sm:text-4xl font-serif">Contacto e Ubicación</h2>
        <p class="text-slate-500 dark:text-slate-400">
          Encuentra nuestro consultorio o envíanos un mensaje directo para resolver tus dudas.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Info de Contacto & Mapa (5 Columnas) -->
        <div class="lg:col-span-5 space-y-6">
          <div class="bg-white dark:bg-brand-cardDark p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm space-y-4">
            <h3 class="text-lg font-bold border-b border-slate-50 dark:border-slate-800 pb-2">Información del Consultorio</h3>
            
            <div class="space-y-3 text-xs">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-brand-blue-light dark:bg-sky-950 text-brand-blue flex items-center justify-center flex-shrink-0"><i data-lucide="map-pin" class="w-4.5 h-4.5"></i></div>
                <div>
                  <span class="block font-bold text-slate-500">Dirección</span>
                  <span class="text-slate-700 dark:text-slate-300">Calle 100 #15-32, Oficina 501 • Bogotá, Colombia</span>
                </div>
              </div>

              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-brand-green-light dark:bg-emerald-950 text-brand-green flex items-center justify-center flex-shrink-0"><i data-lucide="phone" class="w-4.5 h-4.5"></i></div>
                <div>
                  <span class="block font-bold text-slate-500">Teléfono</span>
                  <span class="text-slate-700 dark:text-slate-300">+57 300 123 4567</span>
                </div>
              </div>

              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-brand-peach-light dark:bg-rose-950 text-brand-peach flex items-center justify-center flex-shrink-0"><i data-lucide="mail" class="w-4.5 h-4.5"></i></div>
                <div>
                  <span class="block font-bold text-slate-500">Correo Electrónico</span>
                  <span class="text-slate-700 dark:text-slate-300">contacto@nyllerethpsicologia.com</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Mapa Interactivo Mock / Visualizer -->
          <div class="rounded-2xl overflow-hidden shadow-sm border border-slate-200 h-56 bg-slate-100 dark:bg-slate-800 relative flex items-center justify-center">
            <!-- Representación estética de Google Maps con SVG -->
            <div class="absolute inset-0 flex flex-col items-center justify-center p-4 text-center">
              <i data-lucide="map" class="w-12 h-12 text-slate-300 dark:text-slate-600 mb-2"></i>
              <span class="block text-xs font-bold text-slate-800 dark:text-white">Ubicación Google Maps</span>
              <span class="block text-[10px] text-slate-500 mt-0.5">Bogotá, Zona Norte • Cerca a la Estación Calle 100</span>
              <a href="https://maps.google.com" target="_blank" class="mt-3 text-xs text-brand-blue dark:text-sky-400 font-bold hover:underline">Abrir en Google Maps Externo</a>
            </div>
          </div>
        </div>

        <!-- Formulario de Contacto (7 Columnas) -->
        <div class="lg:col-span-7 bg-white dark:bg-brand-cardDark p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm space-y-4">
          <h3 class="text-lg font-bold border-b border-slate-50 dark:border-slate-800 pb-2">Envíanos un Mensaje</h3>
          
          <form id="contact-form" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contact-name" class="block text-xs font-semibold text-slate-500 uppercase mb-1">Nombre</label>
                <input type="text" id="contact-name" placeholder="Ej. Ana Pérez" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs focus:outline-none focus:border-brand-blue" required>
              </div>
              <div>
                <label for="contact-email" class="block text-xs font-semibold text-slate-500 uppercase mb-1">Correo</label>
                <input type="email" id="contact-email" placeholder="Ej. ana@correo.com" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs focus:outline-none focus:border-brand-blue" required>
              </div>
            </div>

            <div>
              <label for="contact-subject" class="block text-xs font-semibold text-slate-500 uppercase mb-1">Asunto</label>
              <input type="text" id="contact-subject" placeholder="Ej. Consulta sobre terapia de pareja" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs focus:outline-none focus:border-brand-blue" required>
            </div>

            <div>
              <label for="contact-message" class="block text-xs font-semibold text-slate-500 uppercase mb-1">Mensaje</label>
              <textarea id="contact-message" rows="5" placeholder="Escribe tu duda o consulta..." class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs focus:outline-none focus:border-brand-blue resize-none" required></textarea>
            </div>

            <button type="submit" class="btn-primary w-full justify-center py-3 text-xs">
              <span>Enviar Mensaje</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>
          </form>
        </div>

      </div>
    </section>

  </main>

  <!-- ==========================================
     FOOTER / PIE DE PÁGINA
     ========================================== -->
  <footer class="bg-slate-100 dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-12 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 text-xs text-slate-500 dark:text-slate-400">
      
      <!-- Columna 1: Perfil y Licencia -->
      <div class="space-y-3">
        <span class="block text-base font-bold font-serif text-brand-blue dark:text-sky-400">Nyllereth Jimenez</span>
        <p class="leading-relaxed">
          Consultorio psicológico enfocado en salud mental integral y reestructuración cognitiva.
        </p>
        <span class="block text-[10px] font-bold text-slate-400 uppercase">Tarjeta Profesional CC 1005230764</span>
      </div>

      <!-- Columna 2: Enlaces Rápidos -->
      <div class="space-y-3">
        <span class="block font-bold text-slate-700 dark:text-slate-200 uppercase tracking-widest text-[10px]">Enlaces Rápidos</span>
        <ul class="space-y-2">
          <li><a href="#home" class="hover:underline">Inicio</a></li>
          <li><a href="#sobre-mi" class="hover:underline">Sobre Mí</a></li>
          <li><a href="#servicios" class="hover:underline">Servicios</a></li>
          <li><a href="#testimonios" class="hover:underline">Testimonios</a></li>
        </ul>
      </div>

      <!-- Columna 3: Servicios Destacados -->
      <div class="space-y-3">
        <span class="block font-bold text-slate-700 dark:text-slate-200 uppercase tracking-widest text-[10px]">Servicios</span>
        <ul class="space-y-2">
          <li><a href="#servicios" class="hover:underline">Terapia Individual</a></li>
          <li><a href="#servicios" class="hover:underline">Terapia de Pareja</a></li>
          <li><a href="#servicios" class="hover:underline">Terapia Virtual</a></li>
          <li><a href="#blog" class="hover:underline">Blog de Salud Mental</a></li>
        </ul>
      </div>

      <!-- Columna 4: Privacidad y Confidencialidad -->
      <div class="space-y-3">
        <span class="block font-bold text-slate-700 dark:text-slate-200 uppercase tracking-widest text-[10px] flex items-center gap-1">
          <i data-lucide="shield-check" class="w-4 h-4 text-brand-green"></i>
          Seguridad de Datos
        </span>
        <p class="leading-relaxed">
          Cumplimos rigurosamente con la Ley de Confidencialidad Profesional y Protección de Datos Clínicos de Pacientes.
        </p>
        <p class="text-[10px] text-slate-400">© 2026 Dra. Nyllereth Jimenez. Todos los derechos reservados.</p>
      </div>

    </div>
  </footer>

  <!-- ==========================================
     BOTÓN FLOTANTE WHATSAPP INTERACTIVO
     ========================================== -->
  <a href="https://wa.me/573104852208?text=Hola,%20deseo%20agendar%20una%20cita%20psicol%C3%B3gica" target="_blank" class="whatsapp-float pulse-animation" id="whatsapp-floating-btn" title="Chatea por WhatsApp" aria-label="Escríbenos por WhatsApp">
    <i data-lucide="message-circle" class="w-7 h-7"></i>
  </a>

  <!-- ==========================================
     SCRIPTS DE APLICACIÓN
     ========================================== -->
</body>
</html>
