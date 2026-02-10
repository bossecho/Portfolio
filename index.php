<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Echo's Personal Website</title>
  <meta name="description" content="Portfolio of Jericho Maghilom (Echo), 4th-year IT student passionate about coding, system development, and web technologies.">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Custom Styles */
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    @keyframes gradient-shift {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }
    
    @keyframes pulse-glow {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.8; }
    }
    
    @keyframes slide-up {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes blink {
      0%, 80%, 100% { opacity: 0.2; }
      40% { opacity: 1; }
    }
    
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }
    
    .animate-gradient {
      background-size: 200% 200%;
      animation: gradient-shift 8s ease infinite;
    }
    
    .animate-pulse-glow {
      animation: pulse-glow 2s ease-in-out infinite;
    }
    
    .animate-slide-up {
      animation: slide-up 0.8s ease-out forwards;
    }
    
    .scroll-fade {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .scroll-fade.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #60a5fa, #22d3ee, #818cf8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      background-size: 200% auto;
      animation: gradient-shift 3s ease infinite;
    }
    
    .dot {
      width: 6px;
      height: 6px;
      background-color: #60a5fa;
      border-radius: 50%;
      display: inline-block;
      animation: blink 1.4s infinite both;
    }
    
    .dot:nth-child(2) { animation-delay: 0.2s; }
    .dot:nth-child(3) { animation-delay: 0.4s; }
    
    /* Glass effect */
    .glass {
      background: rgba(30, 41, 59, 0.7);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(59, 130, 246, 0.1);
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    ::-webkit-scrollbar-track {
      background: rgba(30, 41, 59, 0.3);
    }
    
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, #3b82f6, #22d3ee);
      border-radius: 5px;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white scroll-smooth overflow-x-hidden">

  <!-- Animated Background Elements -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-cyan-500/5 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-3/4 left-3/4 w-64 h-64 bg-purple-500/5 rounded-full blur-3xl animate-float" style="animation-delay: 4s;"></div>
  </div>

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 w-full z-50 glass py-4 shadow-lg">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="flex items-center space-x-3 group">
        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center">
          <span class="text-gray-900 font-bold text-xl">E</span>
        </div>
        <div>
          <h1 class="text-2xl font-bold gradient-text">Jericho<span class="text-blue-400">(Echo)</span></h1>
          <p class="text-xs text-gray-400">IT Student & Developer</p>
        </div>
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#about" class="relative text-gray-300 hover:text-blue-400 transition-all duration-300 group">
          <span>About</span>
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#skills" class="relative text-gray-300 hover:text-blue-400 transition-all duration-300 group">
          <span>Skills</span>
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#projects" class="relative text-gray-300 hover:text-blue-400 transition-all duration-300 group">
          <span>Projects</span>
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#education" class="relative text-gray-300 hover:text-blue-400 transition-all duration-300 group">
          <span>Education</span>
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#contact" class="px-6 py-2 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 text-gray-900 font-semibold hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300">
          Contact Me
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-300 hover:text-blue-400 transition">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden absolute top-full left-0 w-full glass shadow-xl hidden">
      <div class="flex flex-col space-y-4 p-6">
        <a href="#about" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">About</a>
        <a href="#skills" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">Skills</a>
        <a href="#projects" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">Projects</a>
        <a href="#education" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">Education</a>
        <a href="#hobbies" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">Hobbies</a>
        <a href="#contact" class="text-gray-300 hover:text-blue-400 hover:pl-4 transition-all duration-300">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="about" class="min-h-screen relative flex items-center pt-20">
    <div class="container mx-auto px-6 py-20 relative z-10">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Column - Content -->
        <div class="space-y-8 scroll-fade">
          <div>
            <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
              👋 Hello, I'm
            </span>
            <h1 class="text-5xl md:text-7xl font-bold leading-tight">
              <span class="gradient-text">Jericho</span><br>
              <span class="text-white">Maghilom</span>
            </h1>
            <p class="text-2xl text-gray-300 mt-4">
              But you can call me <span class="text-blue-400 font-bold">Echo</span>
            </p>
          </div>
          
          <p class="text-gray-400 text-lg leading-relaxed">
            I'm a <span class="text-blue-400 font-semibold">4th-year IT student</span> at 
            <span class="text-blue-400 font-semibold">Bestlink College of the Philippines</span>.
            Passionate about creating impactful systems and web applications that solve real-world problems.
          </p>
          
          <div class="flex flex-wrap gap-4">
            <a href="#projects" class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 text-gray-900 font-bold hover:shadow-xl hover:shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-1">
              View My Work
            </a>
            <a href="#contact" class="px-8 py-3 rounded-full glass border border-blue-500/30 text-blue-400 hover:bg-blue-500/10 transition-all duration-300">
              Get In Touch
            </a>
          </div>
        </div>

        <!-- Right Column - Profile Image & Interactive Elements -->
        <div class="relative scroll-fade">
          <div class="relative w-80 h-80 mx-auto">
            <!-- Profile Image Container -->
            <div class="absolute inset-0 rounded-full border-4 border-blue-500/30 animate-pulse-glow"></div>
            <div class="absolute inset-4 rounded-full border-4 border-cyan-500/30 animate-pulse-glow" style="animation-delay: 1s;"></div>
            <img src="echo.jfif" alt="Jericho Maghilom" 
                 class="w-full h-full rounded-full object-cover border-4 border-transparent relative z-10 shadow-2xl">
            
            <!-- Floating Elements -->
            <div class="absolute -top-4 -right-4 w-20 h-20 rounded-2xl glass border border-blue-500/30 flex flex-col items-center justify-center">
              <span class="text-2xl">🎓</span>
              <span class="text-xs text-blue-300">IT Student</span>
            </div>
            
            <div class="absolute -bottom-4 -left-4 w-20 h-20 rounded-2xl glass border border-cyan-500/30 flex flex-col items-center justify-center">
              <span class="text-2xl">💻</span>
              <span class="text-xs text-cyan-300">Developer</span>
            </div>
          </div>

          <!-- Interactive Buttons -->
          <div class="flex justify-center space-x-4 mt-12">
            <button onclick="openModal('adviceModal'); loadAdvice()" 
                    class="px-6 py-3 rounded-xl glass border border-indigo-500/30 hover:bg-indigo-500/20 transition-all duration-300 group">
              <span class="flex items-center space-x-2">
                <span class="text-indigo-400">💡</span>
                <span>Get Advice</span>
              </span>
            </button>
            
            <button onclick="openModal('jokeModal'); loadJoke()" 
                    class="px-6 py-3 rounded-xl glass border border-pink-500/30 hover:bg-pink-500/20 transition-all duration-300 group">
              <span class="flex items-center space-x-2">
                <span class="text-pink-400">😂</span>
                <span>Tell a Joke</span>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-24 relative">
    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16 scroll-fade">
        <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
          TECHNOLOGIES
        </span>
        <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">My Skills & Tools</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">Technologies I've mastered and use to build amazing projects</p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        <!-- Skill Cards -->
        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-blue-500/20 hover:border-blue-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-php-plain text-6xl text-blue-400"></i>
            <p class="mt-4 text-center font-semibold text-blue-300">PHP</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-yellow-500/20 hover:border-yellow-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-javascript-plain text-6xl text-yellow-400"></i>
            <p class="mt-4 text-center font-semibold text-yellow-300">JavaScript</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-blue-500/20 hover:border-blue-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-css3-plain text-6xl text-blue-400"></i>
            <p class="mt-4 text-center font-semibold text-blue-300">CSS</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-green-500/20 hover:border-green-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-mysql-plain text-6xl text-green-400"></i>
            <p class="mt-4 text-center font-semibold text-green-300">MySQL</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-cyan-500/20 hover:border-cyan-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-tailwindcss-plain text-6xl text-cyan-400"></i>
            <p class="mt-4 text-center font-semibold text-cyan-300">Tailwind</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="relative p-8 rounded-2xl glass border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="devicon-bootstrap-plain text-6xl text-purple-400"></i>
            <p class="mt-4 text-center font-semibold text-purple-300">Bootstrap</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-24 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-transparent to-gray-900"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16 scroll-fade">
        <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
          PORTFOLIO
        </span>
        <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Featured Projects</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">Systems I've developed for real-world applications and academic use cases</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project 1 -->
        <div class="group scroll-fade">
          <div class="h-full rounded-2xl glass border border-gray-700 overflow-hidden hover:border-blue-500/50 transition-all duration-500">
            <div class="p-6">
              <div class="flex items-start justify-between mb-6">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20 flex items-center justify-center">
                  <span class="text-2xl">🏥</span>
                </div>
                <span class="px-3 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300">Web Application</span>
              </div>
              
              <h3 class="text-2xl font-bold text-blue-400 mb-3">Health Information System</h3>
              <p class="text-gray-400 mb-6">Comprehensive platform for managing patient records, medical history, and reports with secure role-based access control.</p>
              
              <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 text-sm rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/30">PHP</span>
                <span class="px-3 py-1 text-sm rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/30">MySQL</span>
                <span class="px-3 py-1 text-sm rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/30">Tailwind</span>
              </div>
              
              <div class="flex items-center justify-between pt-6 border-t border-gray-700">
                <a href="https://github.com/bossecho/health-information-system.git" target="_blank" 
                   class="text-blue-400 hover:text-blue-300 transition-colors group/link">
                  <span class="flex items-center">
                    <span>View on GitHub</span>
                    <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                  </span>
                </a>
                <span class="flex items-center text-sm text-green-400">
                  <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                  Active
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="group scroll-fade">
          <div class="h-full rounded-2xl glass border border-gray-700 overflow-hidden hover:border-blue-500/50 transition-all duration-500">
            <div class="p-6">
              <div class="flex items-start justify-between mb-6">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center">
                  <span class="text-2xl">🤖</span>
                </div>
                <span class="px-3 py-1 text-xs rounded-full bg-cyan-500/20 text-cyan-300">AI/ML</span>
              </div>
              
              <h3 class="text-2xl font-bold text-cyan-400 mb-3">Face Detection & Profiling</h3>
              <p class="text-gray-400 mb-6">Browser-based face detection system using AI-powered deep learning models for facial landmark identification and verification.</p>
              
              <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 text-sm rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-500/30">JavaScript</span>
                <span class="px-3 py-1 text-sm rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-500/30">TensorFlow.js</span>
                <span class="px-3 py-1 text-sm rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-500/30">face-api.js</span>
              </div>
              
              <div class="flex items-center justify-between pt-6 border-t border-gray-700">
                <a href="https://github.com/bossecho/face-liveness-detection.git" target="_blank" 
                   class="text-cyan-400 hover:text-cyan-300 transition-colors group/link">
                  <span class="flex items-center">
                    <span>View on GitHub</span>
                    <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                  </span>
                </a>
                <span class="flex items-center text-sm text-green-400">
                  <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                  Active
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="group scroll-fade">
          <div class="h-full rounded-2xl glass border border-gray-700 overflow-hidden hover:border-blue-500/50 transition-all duration-500">
            <div class="p-6">
              <div class="flex items-start justify-between mb-6">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center">
                  <span class="text-2xl">📅</span>
                </div>
                <span class="px-3 py-1 text-xs rounded-full bg-purple-500/20 text-purple-300">Management System</span>
              </div>
              
              <h3 class="text-2xl font-bold text-purple-400 mb-3">Profiling & Scheduling System</h3>
              <p class="text-gray-400 mb-6">Comprehensive management system for profiling teachers and staff, tracking qualifications, and scheduling tasks efficiently.</p>
              
              <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 text-sm rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30">PHP</span>
                <span class="px-3 py-1 text-sm rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30">JavaScript</span>
                <span class="px-3 py-1 text-sm rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30">MySQL</span>
              </div>
              
              <div class="flex items-center justify-between pt-6 border-t border-gray-700">
                <a href="https://github.com/bossecho/Profile-and-Scheduling-Management-System.git" target="_blank" 
                   class="text-purple-400 hover:text-purple-300 transition-colors group/link">
                  <span class="flex items-center">
                    <span>View on GitHub</span>
                    <i class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                  </span>
                </a>
                <span class="flex items-center text-sm text-green-400">
                  <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                  Active
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Education Section -->
  <section id="education" class="py-24 relative">
    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16 scroll-fade">
        <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
          ACADEMIC JOURNEY
        </span>
        <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Education Timeline</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">My academic journey through the years 🎓</p>
      </div>

      <div class="max-w-3xl mx-auto">
        <!-- Timeline -->
        <div class="relative">
          <!-- Timeline line -->
          <div class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-500 via-cyan-500 to-purple-500"></div>
          
          <!-- College -->
          <div class="relative mb-12 scroll-fade">
            <div class="flex flex-col md:flex-row items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center z-10">
                <span class="text-white font-bold">4</span>
              </div>
              <div class="md:ml-8 md:w-5/12"></div>
              <div class="mt-4 md:mt-0 md:ml-8 md:w-5/12">
                <div class="p-6 rounded-2xl glass border border-blue-500/30">
                  <h3 class="text-2xl font-bold text-blue-400">Bestlink College of the Philippines</h3>
                  <p class="text-gray-400 italic">4th Year IT Student (Present)</p>
                  <p class="mt-3 text-gray-300">Pursuing Bachelor's degree in Information Technology, focusing on software development, system design, and web technologies.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Senior High -->
          <div class="relative mb-12 scroll-fade">
            <div class="flex flex-col md:flex-row items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center z-10">
                <span class="text-white font-bold">3</span>
              </div>
              <div class="mt-4 md:mt-0 md:ml-8 md:w-5/12 order-first md:order-none">
                <div class="p-6 rounded-2xl glass border border-green-500/30">
                  <h3 class="text-2xl font-bold text-green-400">Asia Pacific School of Arts and Sciences</h3>
                  <p class="text-gray-400 italic">Senior High School – ICT Strand</p>
                  <p class="mt-3 text-gray-300">Specialized in Information and Communications Technology, building strong foundation in programming and IT fundamentals.</p>
                </div>
              </div>
              <div class="md:ml-8 md:w-5/12"></div>
            </div>
          </div>

          <!-- Junior High -->
          <div class="relative mb-12 scroll-fade">
            <div class="flex flex-col md:flex-row items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-yellow-500 to-amber-500 flex items-center justify-center z-10">
                <span class="text-white font-bold">2</span>
              </div>
              <div class="md:ml-8 md:w-5/12"></div>
              <div class="mt-4 md:mt-0 md:ml-8 md:w-5/12">
                <div class="p-6 rounded-2xl glass border border-yellow-500/30">
                  <h3 class="text-2xl font-bold text-yellow-400">Ernesto Rondon High School</h3>
                  <p class="text-gray-400 italic">Junior High School</p>
                  <p class="mt-3 text-gray-300">Completed junior high school education with focus on academics and extracurricular activities.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Elementary -->
          <div class="relative scroll-fade">
            <div class="flex flex-col md:flex-row items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center z-10">
                <span class="text-white font-bold">1</span>
              </div>
              <div class="mt-4 md:mt-0 md:ml-8 md:w-5/12 order-first md:order-none">
                <div class="p-6 rounded-2xl glass border border-purple-500/30">
                  <h3 class="text-2xl font-bold text-purple-400">Project 6 Elementary School</h3>
                  <p class="text-gray-400 italic">Elementary</p>
                  <p class="mt-3 text-gray-300">Where my academic journey began, shaping early love for learning and curiosity.</p>
                </div>
              </div>
              <div class="md:ml-8 md:w-5/12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hobbies Section -->
  <section id="hobbies" class="py-24 relative">
    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16 scroll-fade">
        <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
          PASSIONS
        </span>
        <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Hobbies & Interests</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">What I enjoy beyond coding 🚀</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Hobby Cards -->
        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-blue-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">🎸</div>
            <h3 class="text-2xl font-bold text-blue-400 mb-3">Playing Guitar</h3>
            <p class="text-gray-400">I enjoy playing guitar and expressing myself through music, whether acoustic or electric.</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-yellow-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">🖥️</div>
            <h3 class="text-2xl font-bold text-yellow-400 mb-3">League of Legends</h3>
            <p class="text-gray-400">Love strategy and teamwork in competitive matches, especially when climbing the ranks.</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-green-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">📱</div>
            <h3 class="text-2xl font-bold text-green-400 mb-3">Mobile Games</h3>
            <p class="text-gray-400">Wild Rift, Mobile Legends, Honor of Kings, and Call of Duty Mobile keep me entertained.</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-purple-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">🎤</div>
            <h3 class="text-2xl font-bold text-purple-400 mb-3">Local Artists</h3>
            <p class="text-gray-400">Arthur Nery, Hellmerry, Shantidope, O Side Mafia, Al James, and Supafly on my playlist.</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-pink-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">🌍</div>
            <h3 class="text-2xl font-bold text-pink-400 mb-3">Foreign Artists</h3>
            <p class="text-gray-400">Big fan of Bruno Mars, Taylor Swift, and Ed Sheeran for inspiration and good vibes.</p>
          </div>
        </div>

        <div class="group scroll-fade">
          <div class="p-8 rounded-2xl glass border border-gray-700 hover:border-cyan-500/50 transition-all duration-300 hover:scale-105">
            <div class="text-5xl mb-6 text-center">🎮</div>
            <h3 class="text-2xl font-bold text-cyan-400 mb-3">Gaming Community</h3>
            <p class="text-gray-400">Active in gaming communities, sharing strategies and connecting with fellow gamers.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-24 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16 scroll-fade">
          <span class="inline-block px-4 py-2 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold mb-4">
            GET IN TOUCH
          </span>
          <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Let's Connect</h2>
          <p class="text-gray-400 max-w-2xl mx-auto">I'd love to hear from you! Fill out the form below or connect with me on social media.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
          <!-- Contact Form -->
          <div class="scroll-fade">
            <div class="rounded-2xl glass border border-gray-700 p-8">
              <h3 class="text-2xl font-bold text-blue-400 mb-6">Send me a message</h3>
              <form action="https://formspree.io/f/mqadazoj" method="POST" class="space-y-6">
                <div>
                  <label class="block text-gray-400 mb-2">Your Name</label>
                  <input type="text" name="name" required
                         class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition">
                </div>
                
                <div>
                  <label class="block text-gray-400 mb-2">Your Email</label>
                  <input type="email" name="email" required
                         class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition">
                </div>
                
                <div>
                  <label class="block text-gray-400 mb-2">Message</label>
                  <textarea name="message" rows="4" required
                            class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition"></textarea>
                </div>
                
                <button type="submit"
                        class="w-full py-3 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 text-gray-900 font-bold hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-1">
                  <span class="flex items-center justify-center">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Send Message
                  </span>
                </button>
              </form>
            </div>
          </div>

          <!-- Social Media & Info -->
          <div class="scroll-fade">
            <div class="space-y-8">
              <div class="rounded-2xl glass border border-gray-700 p-8">
                <h3 class="text-2xl font-bold text-blue-400 mb-6">Connect with me</h3>
                <div class="space-y-4">
                  <a href="https://facebook.com/jerixhococs" target="_blank" 
                     class="flex items-center p-4 rounded-lg bg-gray-800/30 hover:bg-blue-500/10 border border-gray-700 hover:border-blue-500/30 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center mr-4">
                      <i class="fab fa-facebook text-blue-400 text-xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold text-blue-300">Facebook</p>
                      <p class="text-sm text-gray-400">@jerixhococs</p>
                    </div>
                    <i class="fas fa-external-link-alt ml-auto text-gray-500 group-hover:text-blue-400"></i>
                  </a>
                  
                  <a href="https://instagram.com/jericho_lym" target="_blank" 
                     class="flex items-center p-4 rounded-lg bg-gray-800/30 hover:bg-pink-500/10 border border-gray-700 hover:border-pink-500/30 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-pink-500/20 flex items-center justify-center mr-4">
                      <i class="fab fa-instagram text-pink-400 text-xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold text-pink-300">Instagram</p>
                      <p class="text-sm text-gray-400">@jericho_lym</p>
                    </div>
                    <i class="fas fa-external-link-alt ml-auto text-gray-500 group-hover:text-pink-400"></i>
                  </a>
                  
                  <a href="mailto:bossecho78@gmail.com" 
                     class="flex items-center p-4 rounded-lg bg-gray-800/30 hover:bg-green-500/10 border border-gray-700 hover:border-green-500/30 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center mr-4">
                      <i class="fas fa-envelope text-green-400 text-xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold text-green-300">Email</p>
                      <p class="text-sm text-gray-400">bossecho78@gmail.com</p>
                    </div>
                    <i class="fas fa-external-link-alt ml-auto text-gray-500 group-hover:text-green-400"></i>
                  </a>
                </div>
              </div>

              <div class="rounded-2xl glass border border-gray-700 p-8">
                <h3 class="text-2xl font-bold text-blue-400 mb-4">Quick Info</h3>
                <div class="space-y-3 text-gray-400">
                  <p><span class="text-blue-300">Location:</span> Quezon City, Philippines</p>
                  <p><span class="text-blue-300">Status:</span> 4th Year IT Student</p>
                  <p><span class="text-blue-300">Availability:</span> Open for projects & collaboration</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 border-t border-gray-800 relative">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <h3 class="text-2xl font-bold gradient-text">Jericho Maghilom</h3>
          <p class="text-gray-400 text-sm">IT Student & Web Developer</p>
        </div>
        
        <div class="flex space-x-6">
          <a href="https://github.com/bossecho" target="_blank" class="text-gray-400 hover:text-white transition">
            <i class="fab fa-github text-2xl"></i>
          </a>
          <a href="#contact" class="text-gray-400 hover:text-white transition">
            <i class="fas fa-envelope text-2xl"></i>
          </a>
        </div>
      </div>
      
      <div class="mt-8 pt-8 border-t border-gray-800 text-center">
        <p class="text-gray-500">
          © 2025 <span class="text-blue-400 font-semibold">BossEcho</span>. Built with 
          <span class="text-red-500">❤️</span> and 
          <span class="text-cyan-400 font-semibold">Tailwind CSS</span>.
        </p>
      </div>
    </div>
  </footer>

  <!-- Modals -->
  <!-- Advice Modal -->
  <div id="adviceModal" class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50 p-4">
    <div class="bg-gray-800 rounded-2xl border border-blue-500/30 max-w-md w-full p-8 transform scale-95 opacity-0 transition-all duration-300">
      <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-bold text-blue-400 flex items-center">
          <i class="fas fa-lightbulb mr-3"></i> Random Advice
        </h3>
        <button onclick="closeModal('adviceModal')" class="text-gray-400 hover:text-white">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <p id="adviceText" class="text-gray-300 italic mb-8">Loading advice...</p>
      <div class="flex space-x-4">
        <button onclick="loadAdvice()" class="flex-1 py-3 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 text-gray-900 font-bold hover:shadow-lg transition">
          New Advice
        </button>
        <button onclick="closeModal('adviceModal')" class="flex-1 py-3 rounded-lg bg-gray-700 text-gray-300 hover:bg-gray-600 transition">
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- Joke Modal -->
  <div id="jokeModal" class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50 p-4">
    <div class="bg-gray-800 rounded-2xl border border-pink-500/30 max-w-md w-full p-8 transform scale-95 opacity-0 transition-all duration-300">
      <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-bold text-pink-400 flex items-center">
          <i class="fas fa-laugh-beam mr-3"></i> Random Joke
        </h3>
        <button onclick="closeModal('jokeModal')" class="text-gray-400 hover:text-white">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <p id="jokeText" class="text-gray-300 italic mb-8">Loading joke...</p>
      <div class="flex space-x-4">
        <button onclick="loadJoke()" class="flex-1 py-3 rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 text-gray-900 font-bold hover:shadow-lg transition">
          New Joke
        </button>
        <button onclick="closeModal('jokeModal')" class="flex-1 py-3 rounded-lg bg-gray-700 text-gray-300 hover:bg-gray-600 transition">
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- Chatbot (Optional - You can remove if not needed) -->
  <div id="chatbot" class="hidden fixed bottom-24 right-6 w-80 h-96 bg-gray-800 rounded-2xl border border-blue-500/30 shadow-2xl z-40">
    <!-- Chatbot UI would go here -->
  </div>

  <script>
    // Scroll animations
    const scrollElements = document.querySelectorAll('.scroll-fade');
    
    const elementInView = (el, percentageScroll = 100) => {
      const elementTop = el.getBoundingClientRect().top;
      return (
        elementTop <= 
        ((window.innerHeight || document.documentElement.clientHeight) * (percentageScroll/100))
      );
    };
    
    const displayScrollElement = (element) => {
      element.classList.add('visible');
    };
    
    const handleScrollAnimation = () => {
      scrollElements.forEach((el) => {
        if (elementInView(el, 90)) {
          displayScrollElement(el);
        }
      });
    };
    
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
    
    // Close mobile menu when clicking a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });
    
    // Modal functions
    function openModal(id) {
      const modal = document.getElementById(id);
      const content = modal.querySelector('div');
      modal.classList.remove('hidden');
      setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
      }, 10);
    }
    
    function closeModal(id) {
      const modal = document.getElementById(id);
      const content = modal.querySelector('div');
      content.classList.remove('scale-100', 'opacity-100');
      content.classList.add('scale-95', 'opacity-0');
      setTimeout(() => {
        modal.classList.add('hidden');
      }, 300);
    }
    
    // Advice API
    async function loadAdvice() {
      const adviceText = document.getElementById("adviceText");
      try {
        const res = await fetch("https://api.adviceslip.com/advice");
        const data = await res.json();
        adviceText.innerText = `"${data.slip.advice}"`;
      } catch {
        adviceText.innerText = "Could not fetch advice at the moment. Try again later!";
      }
    }
    
    // Joke API
    async function loadJoke() {
      const jokeText = document.getElementById("jokeText");
      try {
        const res = await fetch("https://official-joke-api.appspot.com/random_joke");
        const data = await res.json();
        jokeText.innerText = `${data.setup}\n\n${data.punchline}`;
      } catch {
        jokeText.innerText = "Could not fetch a joke at the moment. Try again later!";
      }
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
    
    // Initialize
    window.addEventListener('scroll', () => {
      handleScrollAnimation();
    });
    
    handleScrollAnimation(); // Run once on load
    
    // Close modals when clicking outside
    window.addEventListener('click', (e) => {
      if (e.target.id === 'adviceModal') closeModal('adviceModal');
      if (e.target.id === 'jokeModal') closeModal('jokeModal');
    });
  </script>
</body>
</html>