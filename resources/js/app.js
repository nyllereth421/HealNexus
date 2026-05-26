import './bootstrap';

/* ==========================================================================
   STATE ENGINE & LOCAL STORAGE DATABASE
   ========================================================================== */
const DB_VERSION = "1.0";
const STORAGE_KEYS = {
  APPOINTMENTS: "nyllereth_db_appointments",
  PATIENTS: "nyllereth_db_patients",
  BLOCKED_DATES: "nyllereth_db_blocked_dates",
  CONFIG: "nyllereth_db_config",
  BLOG: "nyllereth_db_blog",
  ADMIN_SESSION: "nyllereth_admin_session"
};

const ADMIN_CREDENTIALS = {
  username: "admin",
  password: "consulta123"
};

// Configuración de inicio por defecto
const DEFAULT_CONFIG = {
  startTime: "08:00",
  endTime: "17:00",
  workDays: ["lunes", "martes", "miercoles", "jueves", "viernes"]
};

// Fechas bloqueadas iniciales
const DEFAULT_BLOCKED_DATES = [
  { date: "2026-06-01", reason: "Congreso Internacional de Neuropsicología" },
  { date: "2026-06-15", reason: "Feriado Nacional" }
];

// Semillas iniciales del Blog (Escritos por Nyllereth Jimenez)
const DEFAULT_BLOG_POSTS = [
  {
    id: "art-1",
    title: "Entendiendo la Ansiedad: Herramientas para volver al presente",
    category: "ansiedad",
    categoryLabel: "Ansiedad y Estrés",
    date: "2026-05-18",
    readTime: "5 min",
    excerpt: "La ansiedad no es el enemigo; es una señal de alerta de nuestro cuerpo. Aprende a escucharla y desactivar el piloto automático.",
    body: `
      <p>La ansiedad es una de las respuestas biológicas más naturales de nuestro cuerpo. Diseñada para protegernos de amenazas físicas, en la vida moderna suele activarse frente a preocupaciones abstractas: el futuro, el trabajo o el qué dirán.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">¿Qué le ocurre a tu mente cuando tienes ansiedad?</h4>
      <p>Cuando percibes una amenaza, el cerebro activa la amígdala, liberando cortisol y adrenalina. Esto acelera el ritmo cardíaco y acorta la respiración. El problema ocurre cuando nos quedamos atrapados en este ciclo sin una amenaza real.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">Técnicas inmediatas de afrontamiento:</h4>
      <ul class="list-disc pl-5 space-y-2 mt-2">
        <li><strong>Respiración diafragmática (4-7-8):</strong> Inhala por 4 segundos, retén el aire por 7 y exhala lentamente por la boca durante 8 segundos. Esto le avisa al cerebro que está a salvo.</li>
        <li><strong>La técnica de los 5 sentidos (54321):</strong> Identifica a tu alrededor 5 cosas que puedas ver, 4 que puedas tocar, 3 que puedas escuchar, 2 que puedas oler y 1 que puedas saborear. Esto te ancla de inmediato al presente.</li>
        <li><strong>Aceptación sin juicio:</strong> En lugar de pelear con la ansiedad, di para tus adentros: "Siento ansiedad en este momento y está bien, es solo una emoción pasajera y pronto pasará".</li>
      </ul>
      <p class="mt-4">Si sientes que la ansiedad está interfiriendo en tu vida laboral, personal o de pareja, recuerda que no tienes que pasar por esto solo. La psicoterapia ofrece un entorno de acompañamiento clínico especializado para que recuperes las riendas de tu vida.</p>
    `
  },
  {
    id: "art-2",
    title: "La trampa de la autoestima: ¿Por qué compararnos nos debilita?",
    category: "autoestima",
    categoryLabel: "Autoestima",
    date: "2026-05-10",
    readTime: "4 min",
    excerpt: "Las redes sociales nos exponen a vidas perfectas que no existen. Descubre cómo fortalecer tu autovaloración sin competir.",
    body: `
      <p>A menudo medimos nuestra valía personal a través de los logros, la apariencia o la aprobación externa. En la era digital, esta comparación es continua y desgastante, exponiéndonos a "vidas ideales" editadas y desprovistas de los desafíos cotidianos.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">La paradoja de la aprobación externa</h4>
      <p>Cuando nuestra autoestima depende de lo que otros piensan, construimos una estructura frágil. Si recibimos halagos, nos sentimos valiosos; si hay silencio o críticas, nos desmoronamos. La verdadera autoestima no se construye hacia afuera, sino hacia adentro.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">Pasos para fortalecer tu autovaloración:</h4>
      <ul class="list-disc pl-5 space-y-2 mt-2">
        <li><strong>Autocompasión en tus errores:</strong> En lugar de castigarte por fallar, háblate con el mismo afecto y comprensión con el que le hablarías a tu mejor amigo.</li>
        <li><strong>Filtra tus consumos digitales:</strong> Si seguir a ciertas cuentas te genera insatisfacción corporal, económica o social, ten el valor de presionar el botón de "dejar de seguir".</li>
        <li><strong>Registra tus pequeños logros diarios:</strong> Al finalizar tu día, anota 3 cosas sencillas que hayas hecho bien o de las que te sientas agradecido.</li>
      </ul>
    `
  },
  {
    id: "art-3",
    title: "Límites saludables: El arte de decir NO con amor y firmeza",
    category: "emociones",
    categoryLabel: "Manejo Emocional",
    date: "2026-05-02",
    readTime: "6 min",
    excerpt: "Decir no a otros suele ser un sí para nosotros mismos. Aprende a trazar fronteras saludables sin culpa en tus relaciones.",
    body: `
      <p>¿Te cuesta decir no cuando te piden un favor aunque estés exhausto? ¿Sueles aceptar compromisos que no deseas por miedo a que se enojen contigo? El miedo al rechazo y la necesidad de complacer a todos suele ser una fuente de estrés emocional severo.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">¿Por qué nos cuesta tanto poner límites?</h4>
      <p>Desde pequeños se nos enseña que ser "bueno" significa estar siempre dispuesto a ayudar. Sin embargo, no trazar límites nos lleva a experimentar resentimiento hacia los demás y abandono de nuestras propias prioridades de salud física y mental.</p>
      <h4 class="font-bold text-base mt-4 mb-2 text-brand-blue">Guía de comunicación asertiva para límites:</h4>
      <ul class="list-disc pl-5 space-y-2 mt-2">
        <li><strong>Usa frases claras y amables:</strong> "Aprecio que pienses en mí, pero en este momento no cuento con el tiempo necesario para comprometerme con este proyecto".</li>
        <li><strong>No ofrezcas justificaciones excesivas:</strong> Cuando das demasiadas explicaciones, abres la puerta a que la otra persona debata tu decisión. Un "no puedo" es una respuesta completa.</li>
        <li><strong>Soporta la culpa inicial:</strong> Poner un límite suele generar incomodidad al principio. Acepta esa molestia como parte de tu entrenamiento hacia una vida más saludable y coherente.</li>
      </ul>
    `
  }
];

// Semillas iniciales de Citas (Para poblar el admin)
const DEFAULT_APPOINTMENTS = [
  {
    id: "CIT-10293",
    patientName: "Andrea Martínez",
    whatsapp: "+57 3005230764",
    email: "nyllerethj@gmail.com",
    service: "Terapia Individual",
    reason: "Crisis de ansiedad recurrentes por estrés en el entorno laboral.",
    date: "2026-05-25",
    time: "09:00",
    status: "CONFIRMADA",
    paymentStatus: "PAGADO",
    paymentMethod: "stripe",
    notes: "Sesión 1: Se realiza encuadre clínico. Se evidencian distorsiones cognitivas de tipo catastrofismo y sobregeneralización. Se deja tarea de autoregistro de pensamientos ansiosos."
  },
  {
    id: "CIT-39482",
    patientName: "Carlos Gómez",
    whatsapp: "+57 320 456 7890",
    email: "carlos.g@correo.com",
    service: "Terapia de Pareja",
    reason: "Problemas crónicos de comunicación y celos.",
    date: "2026-05-25",
    time: "11:00",
    status: "CONFIRMADA",
    paymentStatus: "PAGADO",
    paymentMethod: "nequi",
    notes: "Sesión 2: Asisten ambos miembros. Se analiza el ciclo de conflicto. Se introduce la técnica de 'tiempo fuera' terapéutico frente a discusiones escaladas."
  },
  {
    id: "CIT-81923",
    patientName: "Jorge Torres",
    whatsapp: "+57 301 222 3333",
    email: "jorge.t@gmail.com",
    service: "Terapia Virtual",
    reason: "Apoyo para el manejo del duelo tras ruptura de relación de 5 años.",
    date: "2026-05-26",
    time: "15:00",
    status: "PENDIENTE",
    paymentStatus: "PAGADO",
    paymentMethod: "daviplata",
    notes: "Sesión de ingreso agendada en línea. Pendiente por evaluación inicial."
  }
];

// Inicialización de Base de Datos local
function initLocalStorageDB() {
  if (!localStorage.getItem(STORAGE_KEYS.CONFIG)) {
    localStorage.setItem(STORAGE_KEYS.CONFIG, JSON.stringify(DEFAULT_CONFIG));
  }
  if (!localStorage.getItem(STORAGE_KEYS.BLOCKED_DATES)) {
    localStorage.setItem(STORAGE_KEYS.BLOCKED_DATES, JSON.stringify(DEFAULT_BLOCKED_DATES));
  }
  if (!localStorage.getItem(STORAGE_KEYS.BLOG)) {
    localStorage.setItem(STORAGE_KEYS.BLOG, JSON.stringify(DEFAULT_BLOG_POSTS));
  }
  if (!localStorage.getItem(STORAGE_KEYS.APPOINTMENTS)) {
    localStorage.setItem(STORAGE_KEYS.APPOINTMENTS, JSON.stringify(DEFAULT_APPOINTMENTS));
  }
  if (!localStorage.getItem(STORAGE_KEYS.USERS)) {
    localStorage.setItem(STORAGE_KEYS.USERS, JSON.stringify([]));
  }
  
  // Generar la tabla de pacientes deduplicados a partir de las citas
  rebuildPatientsListFromAppointments();
}

// Reconstruir lista de pacientes a partir del historial de citas
function rebuildPatientsListFromAppointments() {
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  const patientMap = {};
  
  appointments.forEach(app => {
    const key = app.whatsapp.trim().toLowerCase();
    if (!patientMap[key]) {
      patientMap[key] = {
        id: "PAC-" + Math.floor(1000 + Math.random() * 9000),
        name: app.patientName,
        whatsapp: app.whatsapp,
        email: app.email,
        type: app.service.includes("Infantil") ? "Infantil" : (app.service.includes("Pareja") ? "Pareja" : "Adulto"),
        clinicalNotes: app.notes || "Sin registros clínicos cargados.",
        lastApptDate: app.date
      };
    } else {
      // Si ya existe, añadir la nota si es más reciente
      if (app.notes && !patientMap[key].clinicalNotes.includes(app.notes)) {
        patientMap[key].clinicalNotes += "\n\n" + app.notes;
      }
    }
  });

  localStorage.setItem(STORAGE_KEYS.PATIENTS, JSON.stringify(Object.values(patientMap)));
}

// Reiniciar base de datos local
function resetLocalStorageDB() {
  localStorage.clear();
  initLocalStorageDB();
  alert("Base de datos local restablecida con éxito a los valores de demostración.");
  window.location.reload();
}

function isAdminAuthenticated() {
  return localStorage.getItem(STORAGE_KEYS.ADMIN_SESSION) === ADMIN_CREDENTIALS.username;
}

function showAdminLogin() {
  const loginCard = document.getElementById("admin-login-card");
  const panel = document.getElementById("admin-panel-container");
  const logoutBtn = document.getElementById("admin-logout-btn");
  if (loginCard) loginCard.classList.remove("hidden");
  if (panel) panel.classList.add("hidden");
  if (logoutBtn) logoutBtn.classList.add("hidden");
}

function showAdminPanel() {
  const loginCard = document.getElementById("admin-login-card");
  const panel = document.getElementById("admin-panel-container");
  const logoutBtn = document.getElementById("admin-logout-btn");
  if (loginCard) loginCard.classList.add("hidden");
  if (panel) panel.classList.remove("hidden");
  if (logoutBtn) logoutBtn.classList.remove("hidden");
  renderAdminPanel();
}

function handleAdminLogin(event) {
  event.preventDefault();
  const usernameInput = document.getElementById("admin-login-user").value.trim();
  const passwordInput = document.getElementById("admin-login-pass").value.trim();
  const errorEl = document.getElementById("admin-login-error");

  if (usernameInput === ADMIN_CREDENTIALS.username && passwordInput === ADMIN_CREDENTIALS.password) {
    localStorage.setItem(STORAGE_KEYS.ADMIN_SESSION, ADMIN_CREDENTIALS.username);
    if (errorEl) {
      errorEl.classList.add("hidden");
      errorEl.innerText = "";
    }
    showAdminPanel();
    window.location.hash = "admin";
  } else {
    if (errorEl) {
      errorEl.classList.remove("hidden");
      errorEl.innerText = "Usuario o contraseña incorrectos.";
    }
  }
}

function logoutAdmin() {
  localStorage.removeItem(STORAGE_KEYS.ADMIN_SESSION);
  showAdminLogin();
  if (window.location.hash.substring(1) === "admin") {
    window.location.hash = "home";
  }
}

// Patient authentication removed: booking remains public and only the admin dashboard requires login.


/* ==========================================================================
   SPA ROUTER (ENRUTAMIENTO FLUIDO SIN RECARGAS)
   ========================================================================== */
const SPA_ROUTES = ["home", "sobre-mi", "servicios", "reservar", "sala-virtual", "admin", "testimonios", "blog", "contacto"];

function handleSPARouting() {
  let hash = window.location.hash.substring(1);
  
  // Limpiar parámetros si existen (Ej. #sala-virtual?code=CIT-123)
  let cleanRoute = hash.split("?")[0] || "home";
  
  if (!SPA_ROUTES.includes(cleanRoute)) {
    cleanRoute = "home";
  }

  // Activar la vista correspondiente en el DOM
  document.querySelectorAll(".spa-section").forEach(sec => {
    if (sec.id === cleanRoute) {
      sec.style.display = "block";
      setTimeout(() => sec.classList.add("active"), 50);
    } else {
      sec.style.display = "none";
      sec.classList.remove("active");
    }
  });

  // Resaltar navegación activa
  document.querySelectorAll("nav a[href]").forEach(link => {
    let linkHash = link.getAttribute("href").substring(1);
    if (linkHash === cleanRoute) {
      link.classList.add("text-brand-blue", "dark:text-sky-400", "font-bold");
    } else {
      link.classList.remove("text-brand-blue", "dark:text-sky-400", "font-bold");
    }
  });

  // Cerrar menú móvil al navegar
  const mobileMenu = document.getElementById("mobile-menu");
  if (mobileMenu) mobileMenu.classList.add("hidden");

  // Acciones especiales al cargar vistas específicas
  if (cleanRoute === "reservar") {
    setupBookingCalendar();
  } else if (cleanRoute === "admin") {
    if (isAdminAuthenticated()) {
      showAdminPanel();
    } else {
      showAdminLogin();
    }
  } else if (cleanRoute === "blog") {
    renderBlogPosts();
  } else if (cleanRoute === "sala-virtual") {
    // Si la URL trae un código de videollamada, ponerlo automáticamente
    const params = new URLSearchParams(hash.split("?")[1] || "");
    const code = params.get("code");
    if (code) {
      document.getElementById("video-code-input").value = code;
    }
  }

  // Volver arriba al cambiar de sección
  window.scrollTo({ top: 0, behavior: "smooth" });
}


/* ==========================================================================
   INTERACTIVE BOOKING CALENDAR ENGINE
   ========================================================================== */
let currentCalendarDate = new Date(); // Fecha actual para render del calendario
let selectedBookingDate = null;       // Fecha elegida por el paciente YYYY-MM-DD
let selectedBookingTime = null;       // Hora elegida por el paciente HH:MM

function setupBookingCalendar() {
  const monthYearLabel = document.getElementById("calendar-month-year");
  const calendarGrid = document.getElementById("booking-calendar");
  
  if (!monthYearLabel || !calendarGrid) return;
  
  calendarGrid.innerHTML = "";
  
  const year = currentCalendarDate.getFullYear();
  const month = currentCalendarDate.getMonth();
  
  // Etiqueta del mes actual
  const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  monthYearLabel.innerText = `${monthNames[month]} ${year}`;
  
  // Agregar encabezados de días
  const dayNames = ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"];
  dayNames.forEach(d => {
    const dh = document.createElement("div");
    dh.className = "calendar-day-header";
    dh.innerText = d;
    calendarGrid.appendChild(dh);
  });
  
  // Calcular días del mes
  const firstDayIndex = new Date(year, month, 1).getDay();
  const lastDay = new Date(year, month + 1, 0).getDate();
  const today = new Date();
  
  // Traer citas y feriados configurados
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  const config = JSON.parse(localStorage.getItem(STORAGE_KEYS.CONFIG) || JSON.stringify(DEFAULT_CONFIG));
  const blockedDates = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOCKED_DATES) || "[]");
  
  // Rellenar días vacíos antes del día 1
  for (let i = 0; i < firstDayIndex; i++) {
    const emptyCell = document.createElement("div");
    emptyCell.className = "calendar-day disabled";
    calendarGrid.appendChild(emptyCell);
  }
  
  // Renderizar días del mes
  for (let day = 1; day <= lastDay; day++) {
    const dayCell = document.createElement("div");
    dayCell.className = "calendar-day";
    dayCell.innerText = day;
    
    // Crear string YYYY-MM-DD
    const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    const cellDate = new Date(year, month, day);
    
    // Validar si el día ya pasó
    const isPast = cellDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());
    
    // Validar si el día es laboral
    const dayOfWeekNames = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];
    const dayName = dayOfWeekNames[cellDate.getDay()];
    const isNonWorkDay = !config.workDays.includes(dayName);
    
    // Validar si el día está explícitamente bloqueado por vacaciones
    const isBlocked = blockedDates.some(b => b.date === dateStr);
    
    if (isPast || isNonWorkDay || isBlocked) {
      dayCell.classList.add("disabled");
    } else {
      // Comprobar si tiene citas agendadas
      const hasAppts = appointments.some(app => app.date === dateStr && app.status !== "CANCELADA");
      if (hasAppts) {
        dayCell.classList.add("has-appointments");
      }
      
      // Resaltar si está seleccionado
      if (selectedBookingDate === dateStr) {
        dayCell.classList.add("selected");
      }
      
      // Listener de clic para seleccionar fecha
      dayCell.addEventListener("click", () => {
        document.querySelectorAll(".calendar-day.selected").forEach(el => el.classList.remove("selected"));
        dayCell.classList.add("selected");
        selectedBookingDate = dateStr;
        selectedBookingTime = null; // Reiniciar hora al cambiar día
        
        // Cargar las horas disponibles de este día
        renderTimeSlotsForDate(dateStr);
      });
    }
    
    calendarGrid.appendChild(dayCell);
  }
}

// Renderizar slots de horarios para la fecha elegida
function renderTimeSlotsForDate(dateStr) {
  const slotsContainer = document.getElementById("booking-time-slots");
  const noSlotsAlert = document.getElementById("no-slots-alert");
  if (!slotsContainer) return;
  
  slotsContainer.innerHTML = "";
  noSlotsAlert.classList.add("hidden");
  
  const config = JSON.parse(localStorage.getItem(STORAGE_KEYS.CONFIG) || JSON.stringify(DEFAULT_CONFIG));
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  
  // Generar lista de horas según la franja laboral (intervalos de 1 hora)
  const startHour = parseInt(config.startTime.split(":")[0]);
  const endHour = parseInt(config.endTime.split(":")[0]);
  
  let availableSlotsCount = 0;
  
  for (let h = startHour; h < endHour; h++) {
    const hourStr = `${String(h).padStart(2, '0')}:00`;
    const slotBtn = document.createElement("button");
    slotBtn.className = "time-slot";
    
    // Formato AM/PM para el cliente
    const ampm = h >= 12 ? 'PM' : 'AM';
    const displayHour = h > 12 ? h - 12 : (h === 0 ? 12 : h);
    slotBtn.innerText = `${displayHour}:00 ${ampm}`;
    
    // Comprobar si este horario ya está reservado en esta fecha
    const isBooked = appointments.some(app => app.date === dateStr && app.time === hourStr && app.status !== "CANCELADA");
    
    if (isBooked) {
      slotBtn.classList.add("booked");
      slotBtn.disabled = true;
    } else {
      availableSlotsCount++;
      
      if (selectedBookingTime === hourStr) {
        slotBtn.classList.add("selected");
      }
      
      slotBtn.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelectorAll(".time-slot.selected").forEach(el => el.classList.remove("selected"));
        slotBtn.classList.add("selected");
        selectedBookingTime = hourStr;
        
        // Actualizar el resumen rápido del formulario
        updateBookingFormSummary();
      });
    }
    
    slotsContainer.appendChild(slotBtn);
  }
  
  if (availableSlotsCount === 0) {
    slotsContainer.innerHTML = "<p class='col-span-4 text-xs text-center text-slate-400 py-3'>No hay horarios de consulta disponibles para este día.</p>";
  }
}

// Actualizar resumen visual de la cita en el formulario
function updateBookingFormSummary() {
  const summaryBox = document.getElementById("booking-summary-box");
  const summaryDate = document.getElementById("summary-date");
  const summaryTime = document.getElementById("summary-time");
  const summaryType = document.getElementById("summary-type");
  
  if (!summaryBox || !summaryDate || !summaryTime) return;
  
  if (selectedBookingDate && selectedBookingTime) {
    summaryBox.classList.remove("hidden");
    summaryDate.innerText = selectedBookingDate;
    
    // Formatear hora
    const [h, m] = selectedBookingTime.split(":");
    const ampm = parseInt(h) >= 12 ? 'PM' : 'AM';
    const dispHour = parseInt(h) > 12 ? parseInt(h) - 12 : (parseInt(h) === 0 ? 12 : parseInt(h));
    summaryTime.innerText = `${dispHour}:${m} ${ampm}`;
    
    // Modalidad sugerida
    const serviceVal = document.getElementById("booking-service").value;
    summaryType.innerText = serviceVal.includes("Virtual") ? "Videollamada Integrada" : "Consulta Presencial";
  } else {
    summaryBox.classList.add("hidden");
  }
}


/* ==========================================================================
   MOCK BILLING & ONLINE PAYMENTS SYSTEM
   ========================================================================== */
let activePendingBooking = null; // Guardará temporalmente los datos antes de acreditar el pago

function handleBookingSubmit(e) {
  e.preventDefault();
  
  if (!selectedBookingDate || !selectedBookingTime) {
    alert("Por favor, selecciona una fecha y una hora del calendario de citas.");
    return;
  }

  const service = document.getElementById("booking-service").value;
  const name = document.getElementById("booking-name").value.trim();
  const whatsapp = document.getElementById("booking-whatsapp").value.trim();
  const email = document.getElementById("booking-email").value.trim();
  const reason = document.getElementById("booking-reason").value.trim();
  
  if (!service) {
    alert("Por favor, selecciona el servicio que requieres agendar.");
    return;
  }

  if (!name || !whatsapp || !email) {
    alert("Por favor, ingresa tu nombre, WhatsApp y correo electrónico.");
    return;
  }
  
  // Guardar cita temporalmente para la pasarela de pagos
  activePendingBooking = {
    id: "CIT-" + Math.floor(10000 + Math.random() * 90000),
    patientName: name,
    whatsapp: whatsapp,
    email: email,
    service: service,
    reason: reason,
    date: selectedBookingDate,
    time: selectedBookingTime,
    status: "PENDIENTE",
    paymentStatus: "PENDIENTE"
  };
  
  // Abrir la pasarela de pagos modal
  openPaymentGatewaysModal(activePendingBooking);
}

// Abrir Modal de Pagos
function openPaymentGatewaysModal(booking) {
  const modal = document.getElementById("payment-modal");
  const amountLabel = document.getElementById("payment-amount");
  const patientLabel = document.getElementById("payment-patient-name");
  const dateTimeLabel = document.getElementById("payment-date-time");
  
  if (!modal) return;
  
  // Asignar precios aproximados
  let precio = "$120.000 COP";
  if (booking.service.includes("Pareja")) precio = "$150.000 COP";
  if (booking.service.includes("Infantil")) precio = "$110.000 COP";
  if (booking.service.includes("Familiar")) precio = "$170.000 COP";
  if (booking.service.includes("Virtual")) precio = "$100.000 COP";
  
  amountLabel.innerText = precio;
  patientLabel.innerText = booking.patientName;
  
  // Formatear fecha legible
  dateTimeLabel.innerText = `${booking.date} a las ${booking.time}`;
  
  // Mostrar pantalla de selección de métodos por defecto
  showPaymentStep("methods");
  
  modal.classList.remove("hidden");
  modal.classList.add("flex");
}

function showPaymentStep(stepName) {
  document.querySelectorAll(".payment-step").forEach(el => el.classList.remove("active"));
  
  const stepEl = document.getElementById(`payment-step-${stepName}`);
  if (stepEl) stepEl.classList.add("active");
}

function selectPaymentMethod(method) {
  if (!activePendingBooking) return;
  
  activePendingBooking.paymentMethod = method;
  
  if (method === "nequi" || method === "daviplata") {
    document.getElementById("transfer-method-name").innerText = method;
    showPaymentStep("transfer");
  } else if (method === "stripe" || method === "paypal") {
    showPaymentStep("card");
  }
}

// Acreditar el pago e inscribir cita en base de datos local
function confirmMockPayment() {
  if (!activePendingBooking) return;
  
  // Validar entradas básicas en simulación de transferencia
  const activeStep = document.querySelector(".payment-step.active");
  if (activeStep.id === "payment-step-transfer") {
    const ref = document.getElementById("transfer-ref").value.trim();
    if (!ref) {
      alert("Por favor, introduce el código de referencia de tu transferencia para validar.");
      return;
    }
  } else if (activeStep.id === "payment-step-card") {
    const holder = document.getElementById("card-holder").value.trim();
    const num = document.getElementById("card-num").value.trim();
    if (!holder || !num) {
      alert("Por favor, ingresa los datos de tu tarjeta de crédito.");
      return;
    }
  }
  
  // Actualizar cita a aprobada y pagada
  activePendingBooking.status = "CONFIRMADA";
  activePendingBooking.paymentStatus = "PAGADO";
  
  // Registrar en la base de datos
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  appointments.push(activePendingBooking);
  localStorage.setItem(STORAGE_KEYS.APPOINTMENTS, JSON.stringify(appointments));
  
  // Reconstruir lista de pacientes para sincronizar dashboard
  rebuildPatientsListFromAppointments();
  
  // Poblar los campos del comprobante de éxito
  document.getElementById("voucher-patient").innerText = activePendingBooking.patientName;
  document.getElementById("voucher-service").innerText = activePendingBooking.service;
  document.getElementById("voucher-datetime").innerText = `${activePendingBooking.date} • ${activePendingBooking.time}`;
  document.getElementById("voucher-code").innerText = activePendingBooking.id;
  document.getElementById("voucher-total").innerText = document.getElementById("payment-amount").innerText;
  
  // Mostrar pantalla de éxito
  showPaymentStep("success");
}

// Descargar recibo mock en PDF
function downloadVoucherPDF() {
  alert(`Descargando comprobante de cita ${activePendingBooking.id}.pdf...\nGracias por reservar con la Dra. Nyllereth Jimenez.`);
}

// Redireccionar al cliente al WhatsApp para confirmar la cita
function sendConfirmationWhatsApp() {
  if (!activePendingBooking) return;
  
  const text = `Hola Dra. Nyllereth Jimenez, acabo de agendar y pagar mi cita psicológica con código ${activePendingBooking.id} para el día ${activePendingBooking.date} a las ${activePendingBooking.time}. Mi nombre es ${activePendingBooking.patientName}.`;
  const url = `https://wa.me/573104852208?text=${encodeURIComponent(text)}`;
  window.open(url, "_blank");
}

function closePaymentModalAndRedirect() {
  const modal = document.getElementById("payment-modal");
  if (modal) {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  }
  
  // Limpiar campos del formulario
  document.getElementById("booking-form").reset();
  selectedBookingDate = null;
  selectedBookingTime = null;
  updateBookingFormSummary();
  
  // Volver a Home
  window.location.hash = "home";
}

// Auto-seleccionar servicio al hacer clic en reservar
function selectServiceForBooking(serviceName) {
  window.location.hash = "reservar";
  setTimeout(() => {
    const select = document.getElementById("booking-service");
    if (select) {
      // Buscar coincidencia en valores de opción
      for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value.includes(serviceName)) {
          select.selectedIndex = i;
          break;
        }
      }
      updateBookingFormSummary();
    }
  }, 100);
}


/* ==========================================================================
   SECURE CLIENT VIDEO PORTAL (SALA VIRTUAL SIMULATOR)
   ========================================================================== */
let activeVideoTimer = null;
let secondsRemaining = 45 * 60; // 45 minutos
let localMediaStream = null;

function authenticateVideoSession() {
  const codeInput = document.getElementById("video-code-input").value.trim().toUpperCase();
  
  if (!codeInput) {
    alert("Introduce un código de cita válido.");
    return;
  }
  
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  let targetAppt = appointments.find(app => app.id.toUpperCase() === codeInput && app.status !== "CANCELADA");
  
  // Aceptación especial de código demo para pruebas
  if (codeInput === "DEMO" || codeInput === "TEST") {
    targetAppt = {
      patientName: "Paciente de Demostración",
      service: "Terapia Individual Virtual",
      id: "CIT-DEMO"
    };
  }
  
  if (!targetAppt) {
    alert("Código de cita inválido, cancelado o pendiente de pago. Verifica tu comprobante.");
    return;
  }
  
  // Activar sala de videollamada
  document.getElementById("video-auth-card").classList.add("hidden");
  document.getElementById("video-active-room").classList.remove("hidden");
  
  document.getElementById("video-session-title").innerText = `Consulta: ${targetAppt.service} • Paciente: ${targetAppt.patientName}`;
  document.getElementById("local-video-label-name").innerText = `${targetAppt.patientName} (Tú)`;
  
  // Encender simuladores y solicitar cámara real si el usuario lo aprueba
  startLocalCameraFeed();
  simulatePsychologistVideoFeed();
  startVideoSessionTimer();
}

// Iniciar cámara local (WebRTC real)
async function startLocalCameraFeed() {
  const localVideo = document.getElementById("local-video");
  const placeholder = document.getElementById("local-video-placeholder");
  const micIndicator = document.getElementById("local-audio-indicator");
  
  try {
    const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
    localMediaStream = stream;
    
    if (localVideo) {
      localVideo.srcObject = stream;
      localVideo.classList.remove("hidden");
      if (placeholder) placeholder.classList.add("hidden");
    }
    
    // Actualizar estados visuales de controles
    document.getElementById("icon-cam-on").classList.remove("hidden");
    document.getElementById("icon-cam-off").classList.add("hidden");
    
    // Indicador activo de audio
    micIndicator.className = "w-3 h-3 text-emerald-400 animate-pulse";
    
  } catch (err) {
    console.warn("Permisos de cámara o micrófono denegados o no disponibles. Ejecutando con placeholder decorativo.", err);
    // Asegurarse de ocultar el video y mostrar el placeholder estético
    if (localVideo) localVideo.classList.add("hidden");
    if (placeholder) placeholder.classList.remove("hidden");
  }
}

// Simulador estético de la feed del terapeuta
function simulatePsychologistVideoFeed() {
  const videoBox = document.getElementById("psychologist-video-box");
  if (!videoBox) return;
  
  // Colorear e interactuar simulando habla activa del terapeuta cada 15 segs
  setInterval(() => {
    if (Math.random() > 0.6) {
      videoBox.classList.add("active-speaker");
    } else {
      videoBox.classList.remove("active-speaker");
    }
  }, 3000);
}

// Iniciar temporizador clínico regresivo
function startVideoSessionTimer() {
  secondsRemaining = 45 * 60; // 45:00 min
  
  if (activeVideoTimer) clearInterval(activeVideoTimer);
  
  const timerLabel = document.getElementById("session-timer-text");
  const timerWrapper = document.getElementById("session-timer-wrapper");
  
  activeVideoTimer = setInterval(() => {
    secondsRemaining--;
    
    if (secondsRemaining <= 0) {
      clearInterval(activeVideoTimer);
      alert("La sesión clínica de 45 minutos ha finalizado. Gracias por asistir.");
      exitVideoSession();
      return;
    }
    
    // Alerta de 5 minutos
    if (secondsRemaining === 5 * 60) {
      timerWrapper.classList.remove("text-brand-peach");
      timerWrapper.classList.add("text-red-500", "animate-pulse");
      alert("Atención: Quedan 5 minutos para finalizar la sesión clínica.");
    }
    
    const mins = Math.floor(secondsRemaining / 60);
    const secs = secondsRemaining % 60;
    
    if (timerLabel) {
      timerLabel.innerText = `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
    }
  }, 1000);
}

// Toggles de hardware multimedia
let isAudioMuted = false;
let isVideoMuted = false;

function toggleLocalAudio() {
  isAudioMuted = !isAudioMuted;
  const micIndicator = document.getElementById("local-audio-indicator");
  
  if (localMediaStream) {
    localMediaStream.getAudioTracks().forEach(track => track.enabled = !isAudioMuted);
  }
  
  const iconOn = document.getElementById("icon-mic-on");
  const iconOff = document.getElementById("icon-mic-off");
  
  if (isAudioMuted) {
    iconOn.classList.add("hidden");
    iconOff.classList.remove("hidden");
    micIndicator.className = "w-3 h-3 text-red-500";
  } else {
    iconOn.classList.remove("hidden");
    iconOff.classList.add("hidden");
    micIndicator.className = "w-3 h-3 text-emerald-400 animate-pulse";
  }
}

function toggleLocalVideo() {
  isVideoMuted = !isVideoMuted;
  const localVideo = document.getElementById("local-video");
  const placeholder = document.getElementById("local-video-placeholder");
  
  if (localMediaStream) {
    localMediaStream.getVideoTracks().forEach(track => track.enabled = !isVideoMuted);
  }
  
  const iconOn = document.getElementById("icon-cam-on");
  const iconOff = document.getElementById("icon-cam-off");
  
  if (isVideoMuted) {
    iconOn.classList.add("hidden");
    iconOff.classList.remove("hidden");
    if (localVideo) localVideo.classList.add("hidden");
    if (placeholder) placeholder.classList.remove("hidden");
  } else {
    iconOn.classList.remove("hidden");
    iconOff.classList.add("hidden");
    if (localVideo && localMediaStream) localVideo.classList.remove("hidden");
    if (placeholder) placeholder.classList.add("hidden");
  }
}

// Compartir pantalla simulada
function toggleScreenShare() {
  alert("Simulando compartir pantalla en sala privada...\n(Para producción real, se solicita getDisplayMedia en navegadores compatibles).");
}

// Chat de videollamada interactivo
document.getElementById("video-chat-form").addEventListener("submit", (e) => {
  e.preventDefault();
  const input = document.getElementById("video-chat-input");
  const chatFeed = document.getElementById("video-chat-feed");
  
  if (!input || !chatFeed) return;
  
  const text = input.value.trim();
  if (!text) return;
  
  // Agregar mensaje del paciente
  const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  const msgBox = document.createElement("div");
  msgBox.className = "space-y-1 text-right";
  msgBox.innerHTML = `
    <span class="block text-[10px] text-slate-400 font-bold">Tú • ${time}</span>
    <p class="bg-brand-blue text-white p-2 rounded-xl text-slate-700 dark:text-slate-300 max-w-[85%] inline-block text-left">
      ${text}
    </p>
  `;
  chatFeed.appendChild(msgBox);
  
  input.value = "";
  chatFeed.scrollTop = chatFeed.scrollHeight;
  
  // Respuesta simulada de la Dra. Nyllereth Jimenez tras 2 segundos
  setTimeout(() => {
    const docMsg = document.createElement("div");
    docMsg.className = "space-y-1";
    docMsg.innerHTML = `
      <span class="block text-[10px] text-brand-blue dark:text-sky-400 font-bold">Dra. Nyllereth J. • ${time}</span>
      <p class="bg-slate-100 dark:bg-slate-800 p-2 rounded-xl text-slate-700 dark:text-slate-300 max-w-[85%] inline-block">
        Entiendo tu punto de vista completamente. Anotemos este aspecto para profundizarlo en nuestra reestructuración cognitiva.
      </p>
    `;
    chatFeed.appendChild(docMsg);
    chatFeed.scrollTop = chatFeed.scrollHeight;
  }, 2000);
});

// Salir de la videollamada
function exitVideoSession() {
  if (activeVideoTimer) clearInterval(activeVideoTimer);
  
  if (localMediaStream) {
    localMediaStream.getTracks().forEach(track => track.stop());
    localMediaStream = null;
  }
  
  // Volver a estado inicial de autenticación en la SPA
  document.getElementById("video-active-room").classList.add("hidden");
  document.getElementById("video-auth-card").classList.remove("hidden");
  document.getElementById("video-code-input").value = "";
  
  window.location.hash = "home";
}


/* ==========================================================================
   ADMINISTRATOR DASHBOARD MODULE
   ========================================================================== */
let activeAdminTab = "resumen";

function switchAdminTab(tabName) {
  activeAdminTab = tabName;
  
  // Actualizar menú lateral
  document.querySelectorAll("[data-admin-tab]").forEach(el => {
    if (el.getAttribute("data-admin-tab") === tabName) {
      el.classList.add("active");
    } else {
      el.classList.remove("active");
    }
  });

  // Mostrar tab dinámico
  document.querySelectorAll(".admin-tab-content").forEach(c => {
    if (c.id === `admin-tab-content-${tabName}`) {
      c.classList.remove("hidden");
    } else {
      c.classList.add("hidden");
    }
  });

  if (tabName === "citas") {
    renderAdminAppointmentsTable();
  } else if (tabName === "pacientes") {
    renderAdminPatientsList();
  } else if (tabName === "horarios") {
    renderBlockedDatesList();
  }
}

// Renderizar panel central y recalcular estadísticas reales
function renderAdminPanel() {
  if (!isAdminAuthenticated()) return;
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  const patients = JSON.parse(localStorage.getItem(STORAGE_KEYS.PATIENTS) || "[]");
  
  // 1. Recalcular Citas Totales
  const totalCitas = appointments.filter(a => a.status !== "CANCELADA").length;
  document.getElementById("stat-total-citas").innerText = totalCitas;
  
  // 2. Recalcular Pacientes
  document.getElementById("stat-pacientes").innerText = patients.length;
  
  // 3. Recalcular Ingresos Acumulados ($ COP)
  let ingresos = 0;
  appointments.forEach(app => {
    if (app.status !== "CANCELADA" && app.paymentStatus === "PAGADO") {
      let cost = 120000;
      if (app.service.includes("Pareja")) cost = 150000;
      if (app.service.includes("Infantil")) cost = 110000;
      if (app.service.includes("Familiar")) cost = 170000;
      if (app.service.includes("Virtual")) cost = 100000;
      ingresos += cost;
    }
  });
  
  // Formatear pesos colombianos
  document.getElementById("stat-ingresos").innerText = "$" + ingresos.toLocaleString("es-CO");
  
  // Cargar tabla de la tab activa por defecto
  switchAdminTab(activeAdminTab);
}

// RENDER TAB CITAS: Tabla CRUD
function renderAdminAppointmentsTable() {
  const tbody = document.getElementById("admin-citas-tbody");
  if (!tbody) return;
  
  tbody.innerHTML = "";
  
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  
  // Ordenar cronológicamente (más recientes arriba)
  appointments.sort((a, b) => new Date(b.date + "T" + b.time) - new Date(a.date + "T" + a.time));
  
  if (appointments.length === 0) {
    tbody.innerHTML = `<tr><td colspan="5" class="p-8 text-center text-slate-400">No hay registros de citas clínicas.</td></tr>`;
    return;
  }
  
  appointments.forEach(app => {
    const tr = document.createElement("tr");
    tr.className = "hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors";
    
    // Badges de estados
    let statusClass = "bg-slate-100 text-slate-700";
    if (app.status === "CONFIRMADA") statusClass = "bg-emerald-100 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300";
    if (app.status === "CANCELADA") statusClass = "bg-rose-100 text-rose-700 dark:bg-rose-950 dark:text-rose-300";
    
    let payClass = "bg-slate-100 text-slate-700";
    if (app.paymentStatus === "PAGADO") payClass = "bg-emerald-100 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300";
    if (app.paymentStatus === "PENDIENTE") payClass = "bg-amber-100 text-amber-700 dark:bg-amber-950 dark:text-amber-300";
    
    // Controles de acción
    let actionButtons = "";
    if (app.status === "PENDIENTE" || app.status === "CONFIRMADA") {
      actionButtons += `
        <button onclick="cancelAppointmentFromAdmin('${app.id}')" class="px-2 py-1 text-[10px] rounded font-bold bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200" title="Cancelar Cita">Cancelar</button>
      `;
    }
    if (app.status === "PENDIENTE") {
      actionButtons += `
        <button onclick="approveAppointmentFromAdmin('${app.id}')" class="px-2 py-1 text-[10px] rounded font-bold bg-emerald-50 hover:bg-emerald-100 text-emerald-600 border border-emerald-200" title="Aprobar Cita">Aprobar</button>
      `;
    }
    if (app.service.includes("Virtual") || app.service.includes("Online")) {
      actionButtons += `
        <a href="#sala-virtual?code=${app.id}" class="px-2 py-1 text-[10px] rounded font-bold bg-brand-blue-light hover:bg-brand-blue hover:text-white text-brand-blue border border-brand-blue-light transition-all" title="Iniciar Sala de Consulta Virtual">Iniciar Sala</a>
      `;
    }
    
    tr.innerHTML = `
      <td class="p-3 font-semibold text-slate-800 dark:text-white">
        <span class="block">${app.patientName}</span>
        <span class="block text-[10px] text-slate-400">${app.whatsapp}</span>
      </td>
      <td class="p-3 text-slate-600 dark:text-slate-300">${app.service}</td>
      <td class="p-3 font-mono">
        <span class="block">${app.date}</span>
        <span class="block text-[10px] text-slate-400 font-bold">${app.time}</span>
      </td>
      <td class="p-3 space-y-1">
        <span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold ${statusClass}">${app.status}</span>
        <span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold ${payClass}">${app.paymentStatus} (${app.paymentMethod || 'manual'})</span>
      </td>
      <td class="p-3 text-right space-x-1 space-y-1">
        ${actionButtons}
      </td>
    `;
    tbody.appendChild(tr);
  });
}

// Acciones de Aprobación / Cancelación de citas
function approveAppointmentFromAdmin(id) {
  const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
  const app = appointments.find(a => a.id === id);
  if (app) {
    app.status = "CONFIRMADA";
    localStorage.setItem(STORAGE_KEYS.APPOINTMENTS, JSON.stringify(appointments));
    renderAdminAppointmentsTable();
  }
}

function cancelAppointmentFromAdmin(id) {
  if (confirm(`¿Estás seguro de que deseas cancelar la cita clínica ${id}?`)) {
    const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
    const app = appointments.find(a => a.id === id);
    if (app) {
      app.status = "CANCELADA";
      localStorage.setItem(STORAGE_KEYS.APPOINTMENTS, JSON.stringify(appointments));
      renderAdminAppointmentsTable();
    }
  }
}

// RENDER TAB PACIENTES: Expedientes Clínicos
function renderAdminPatientsList() {
  const listContainer = document.getElementById("admin-pacientes-list");
  if (!listContainer) return;
  
  listContainer.innerHTML = "";
  
  const patients = JSON.parse(localStorage.getItem(STORAGE_KEYS.PATIENTS) || "[]");
  
  if (patients.length === 0) {
    listContainer.innerHTML = `<p class="text-xs text-center text-slate-400 py-6">No hay pacientes registrados en el sistema.</p>`;
    return;
  }
  
  patients.forEach(pat => {
    const item = document.createElement("div");
    item.className = "p-3 rounded-xl hover:bg-white dark:hover:bg-slate-800 border border-transparent hover:border-slate-100 dark:hover:border-slate-700 cursor-pointer transition-all flex items-center gap-3";
    
    item.innerHTML = `
      <div class="w-8 h-8 rounded-full bg-brand-blue-light text-brand-blue dark:bg-sky-950 font-bold flex items-center justify-center text-xs flex-shrink-0">
        ${pat.name.charAt(0)}
      </div>
      <div class="overflow-hidden">
        <span class="block font-bold text-slate-800 dark:text-white truncate">${pat.name}</span>
        <span class="block text-[10px] text-slate-400 truncate">U. Cita: ${pat.lastApptDate}</span>
      </div>
    `;
    
    item.addEventListener("click", () => {
      openPatientClinicalRecord(pat);
    });
    
    listContainer.appendChild(item);
  });
}

// Abrir expediente clínico en panel derecho
function openPatientClinicalRecord(patient) {
  const profileBox = document.getElementById("admin-paciente-profile-box");
  const emptyBox = document.getElementById("admin-pacientes-empty-box");
  
  if (!profileBox || !emptyBox) return;
  
  emptyBox.classList.add("hidden");
  profileBox.classList.remove("hidden");
  
  document.getElementById("patient-detail-name").innerText = patient.name;
  document.getElementById("patient-detail-phone").innerText = patient.whatsapp;
  document.getElementById("patient-detail-email").innerText = patient.email;
  document.getElementById("patient-detail-type").innerText = patient.type;
  document.getElementById("patient-detail-notes").innerHTML = patient.clinicalNotes.replace(/\n/g, "<br>");
  document.getElementById("patient-detail-id").value = patient.whatsapp; // Guardar referencia única por WhatsApp
}

// Guardar Notas Clínicas Privadas
document.getElementById("admin-note-form").addEventListener("submit", (e) => {
  e.preventDefault();
  
  const whatsappId = document.getElementById("patient-detail-id").value;
  const newNoteText = document.getElementById("admin-new-note").value.trim();
  
  if (!whatsappId || !newNoteText) return;
  
  const patients = JSON.parse(localStorage.getItem(STORAGE_KEYS.PATIENTS) || "[]");
  const targetPatient = patients.find(p => p.whatsapp === whatsappId);
  
  if (targetPatient) {
    const timestamp = new Date().toLocaleDateString();
    const formattedNote = `\n\n[Nota Clínica - Dra. Nyllereth Jimenez • ${timestamp}]:\n${newNoteText}`;
    targetPatient.clinicalNotes += formattedNote;
    
    // Guardar pacientes
    localStorage.setItem(STORAGE_KEYS.PATIENTS, JSON.stringify(patients));
    
    // Sincronizar también con la última cita del paciente en LocalStorage para no perder coherencia
    const appointments = JSON.parse(localStorage.getItem(STORAGE_KEYS.APPOINTMENTS) || "[]");
    const lastAppt = appointments
      .filter(a => a.whatsapp === whatsappId)
      .sort((a, b) => new Date(b.date) - new Date(a.date))[0];
      
    if (lastAppt) {
      lastAppt.notes = targetPatient.clinicalNotes;
      localStorage.setItem(STORAGE_KEYS.APPOINTMENTS, JSON.stringify(appointments));
    }
    
    // Recargar vista
    openPatientClinicalRecord(targetPatient);
    document.getElementById("admin-new-note").value = "";
    alert("Nota clínica privada guardada con éxito en el expediente del paciente.");
  }
});

// Guardar cambios de Franja Horaria desde Admin
document.getElementById("admin-hours-form").addEventListener("submit", (e) => {
  e.preventDefault();
  
  const start = document.getElementById("config-start-time").value;
  const end = document.getElementById("config-end-time").value;
  
  // Leer días seleccionados
  const days = [];
  if (document.getElementById("day-lunes").checked) days.push("lunes");
  if (document.getElementById("day-martes").checked) days.push("martes");
  if (document.getElementById("day-miercoles").checked) days.push("miercoles");
  if (document.getElementById("day-jueves").checked) days.push("jueves");
  if (document.getElementById("day-viernes").checked) days.push("viernes");
  if (document.getElementById("day-sabado").checked) days.push("sabado");
  
  if (days.length === 0) {
    alert("Debes seleccionar al menos un día laboral de atención.");
    return;
  }
  
  const newConfig = {
    startTime: start,
    endTime: end,
    workDays: days
  };
  
  localStorage.setItem(STORAGE_KEYS.CONFIG, JSON.stringify(newConfig));
  alert("Horarios del consultorio actualizados correctamente en toda la plataforma.");
  
  // Sincronizar calendario
  selectedBookingDate = null;
  selectedBookingTime = null;
  setupBookingCalendar();
});

// Bloquear fechas especiales desde Admin
document.getElementById("admin-block-form").addEventListener("submit", (e) => {
  e.preventDefault();
  
  const date = document.getElementById("block-date").value;
  const reason = document.getElementById("block-reason").value.trim();
  
  if (!date || !reason) return;
  
  const blockedDates = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOCKED_DATES) || "[]");
  
  // Comprobar si ya existe
  if (blockedDates.some(b => b.date === date)) {
    alert("Esta fecha ya se encuentra bloqueada.");
    return;
  }
  
  blockedDates.push({ date, reason });
  localStorage.setItem(STORAGE_KEYS.BLOCKED_DATES, JSON.stringify(blockedDates));
  
  document.getElementById("admin-block-form").reset();
  renderBlockedDatesList();
  
  // Sincronizar calendario
  selectedBookingDate = null;
  selectedBookingTime = null;
  setupBookingCalendar();
  
  alert(`La fecha ${date} ha sido bloqueada. Los pacientes no podrán agendar consultas este día.`);
});

// Renderizar fechas bloqueadas en panel
function renderBlockedDatesList() {
  const container = document.getElementById("admin-blocked-dates-list");
  if (!container) return;
  
  container.innerHTML = "";
  
  const blockedDates = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOCKED_DATES) || "[]");
  
  if (blockedDates.length === 0) {
    container.innerHTML = `<span class="text-[10px] text-slate-400 italic">No hay fechas bloqueadas en agenda.</span>`;
    return;
  }
  
  blockedDates.forEach(b => {
    const chip = document.createElement("div");
    chip.className = "flex items-center justify-between bg-slate-50 dark:bg-slate-800 p-2 rounded-lg text-[10px] border border-slate-100 dark:border-slate-700";
    chip.innerHTML = `
      <div>
        <strong class="text-slate-700 dark:text-slate-300 font-mono">${b.date}</strong> 
        <span class="text-slate-400"> - ${b.reason}</span>
      </div>
      <button onclick="unblockDateFromAdmin('${b.date}')" class="text-red-500 hover:text-red-700 font-bold px-1.5"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
    `;
    container.appendChild(chip);
  });
  
  lucide.createIcons(); // Recargar iconos Lucide
}

function unblockDateFromAdmin(dateStr) {
  if (confirm(`¿Deseas desbloquear la fecha ${dateStr}?`)) {
    let blockedDates = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOCKED_DATES) || "[]");
    blockedDates = blockedDates.filter(b => b.date !== dateStr);
    localStorage.setItem(STORAGE_KEYS.BLOCKED_DATES, JSON.stringify(blockedDates));
    renderBlockedDatesList();
    setupBookingCalendar();
  }
}


/* ==========================================================================
   BLOG MODULE & SEARCH ENGINES
   ========================================================================== */
let activeBlogCategory = "todas";

function renderBlogPosts() {
  const grid = document.getElementById("blog-posts-grid");
  const searchInput = document.getElementById("blog-search-input");
  
  if (!grid) return;
  
  grid.innerHTML = "";
  
  const blogPosts = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOG) || "[]");
  const query = searchInput ? searchInput.value.toLowerCase().trim() : "";
  
  let filtered = blogPosts;
  
  // 1. Filtrar por categoría
  if (activeBlogCategory !== "todas") {
    filtered = filtered.filter(post => post.category === activeBlogCategory);
  }
  
  // 2. Filtrar por buscador
  if (query) {
    filtered = filtered.filter(post => 
      post.title.toLowerCase().includes(query) || 
      post.excerpt.toLowerCase().includes(query)
    );
  }
  
  if (filtered.length === 0) {
    grid.innerHTML = `<div class="col-span-3 text-center text-slate-400 py-12">No se encontraron artículos con los criterios seleccionados.</div>`;
    return;
  }
  
  filtered.forEach(post => {
    const card = document.createElement("div");
    card.className = "glass-card p-6 flex flex-col justify-between h-full bg-white dark:bg-brand-cardDark";
    
    card.innerHTML = `
      <div>
        <div class="flex items-center justify-between text-[10px] font-bold text-slate-400 mb-3">
          <span class="bg-brand-blue-light text-brand-blue dark:bg-sky-950 px-2 py-0.5 rounded uppercase">${post.categoryLabel}</span>
          <span>${post.date}</span>
        </div>
        <h3 class="text-xl font-bold font-serif mb-2 text-slate-800 dark:text-white line-clamp-2">${post.title}</h3>
        <p class="text-slate-600 dark:text-slate-300 text-xs line-clamp-3 mb-4 leading-relaxed">${post.excerpt}</p>
      </div>
      
      <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center text-xs">
        <span class="text-slate-400 font-medium">Lectura: ${post.readTime}</span>
        <button onclick="readBlogPost('${post.id}')" class="text-brand-blue dark:text-sky-400 font-bold hover:underline flex items-center gap-1">
          <span>Leer artículo</span>
          <i data-lucide="chevron-right" class="w-4 h-4"></i>
        </button>
      </div>
    `;
    grid.appendChild(card);
  });
  
  lucide.createIcons(); // Inicializar iconos Lucide en las nuevas tarjetas
}

function filterBlogPosts(cat) {
  activeBlogCategory = cat;
  
  // Actualizar estilos activos de filtros
  const filtersWrapper = document.getElementById("blog-category-filters");
  if (filtersWrapper) {
    filtersWrapper.querySelectorAll("button").forEach(btn => {
      // Comparar texto burdo o manejar clases
      btn.className = "px-3.5 py-1.5 rounded-full bg-slate-200 dark:bg-slate-700 hover:bg-brand-blue hover:text-white transition-all text-slate-700 dark:text-slate-300";
    });
    
    // Asignar activo al botón clicado
    event.target.className = "px-3.5 py-1.5 rounded-full bg-brand-blue text-white font-semibold transition-all";
  }
  
  renderBlogPosts();
}

// Abrir lector de artículos en ventana modal
function readBlogPost(id) {
  const modal = document.getElementById("blog-read-modal");
  if (!modal) return;
  
  const posts = JSON.parse(localStorage.getItem(STORAGE_KEYS.BLOG) || "[]");
  const post = posts.find(p => p.id === id);
  
  if (post) {
    document.getElementById("blog-modal-category").innerText = post.categoryLabel;
    document.getElementById("blog-modal-date").innerText = post.date;
    document.getElementById("blog-modal-title").innerText = post.title;
    document.getElementById("blog-modal-body").innerHTML = post.body;
    
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  }
}


/* ==========================================================================
   EVENT LISTENERS & GENERAL DOM CONFIGURATION
   ========================================================================= */
document.addEventListener("DOMContentLoaded", () => {
  // 1. Inicializar Base de Datos local
  initLocalStorageDB();
  
  // 2. Cargar iconos Lucide por defecto
  lucide.createIcons();
  
  // 3. Configurar Router SPA
  window.addEventListener("hashchange", handleSPARouting);
  handleSPARouting(); // Cargar la sección por defecto del Hash actual
  
  // 4. Configurar controles del Tema Claro/Oscuro
  setupThemeManager();
  
  // 5. Configurar Calendario navegación mes anterior/siguiente
  const prevBtn = document.getElementById("prev-month-btn");
  const nextBtn = document.getElementById("next-month-btn");
  
  if (prevBtn && nextBtn) {
    prevBtn.addEventListener("click", (e) => {
      e.preventDefault();
      currentCalendarDate.setMonth(currentCalendarDate.getMonth() - 1);
      setupBookingCalendar();
    });
    
    nextBtn.addEventListener("click", (e) => {
      e.preventDefault();
      currentCalendarDate.setMonth(currentCalendarDate.getMonth() + 1);
      setupBookingCalendar();
    });
  }

  // 6. Listener del Formulario de Reserva
  const bookingForm = document.getElementById("booking-form");
  if (bookingForm) {
    bookingForm.addEventListener("submit", handleBookingSubmit);
  }

  const adminLoginForm = document.getElementById("admin-login-form");
  if (adminLoginForm) {
    adminLoginForm.addEventListener("submit", handleAdminLogin);
  }

  const adminLogoutBtn = document.getElementById("admin-logout-btn");
  if (adminLogoutBtn) {
    adminLogoutBtn.addEventListener("click", logoutAdmin);
  }
  
  // 7. Modals close listeners
  const closePaymentBtn = document.getElementById("close-payment-btn");
  if (closePaymentBtn) {
    closePaymentBtn.addEventListener("click", () => {
      document.getElementById("payment-modal").classList.add("hidden");
    });
  }
  
  const closeBlogBtn = document.getElementById("close-blog-modal-btn");
  if (closeBlogBtn) {
    closeBlogBtn.addEventListener("click", () => {
      document.getElementById("blog-read-modal").classList.add("hidden");
    });
  }

  // 8. Pestañas informativas interactivos en "Sobre mí"
  const tabButtons = document.querySelectorAll("#sobre-mi-tabs .tab-btn");
  tabButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Quitar activos
      tabButtons.forEach(b => {
        b.classList.remove("active", "text-brand-blue", "dark:text-sky-400", "font-bold");
        b.classList.add("text-slate-500", "dark:text-slate-400");
      });
      // Ocultar contenidos
      document.querySelectorAll(".tab-content").forEach(c => c.classList.add("hidden"));
      
      // Activar actual
      btn.classList.add("active", "text-brand-blue", "dark:text-sky-400", "font-bold");
      btn.classList.remove("text-slate-500", "dark:text-slate-400");
      
      const tabName = btn.getAttribute("data-tab");
      document.getElementById(`tab-content-${tabName}`).classList.remove("hidden");
    });
  });

  // 9. Buscador del Blog en tiempo real
  const blogSearch = document.getElementById("blog-search-input");
  if (blogSearch) {
    blogSearch.addEventListener("input", renderBlogPosts);
  }

  // 10. Formulario de contacto
  const contactForm = document.getElementById("contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();
      alert(`¡Mensaje Enviado con Éxito!\nGracias por comunicarte con el consultorio de la Dra. Nyllereth Jimenez. Nos pondremos en contacto contigo lo antes posible.`);
      contactForm.reset();
    });
  }
  
  // 11. Menú Móvil Botón Toggle
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }
});

// Estilos del Navbar scroll dinámico
window.addEventListener("scroll", () => {
  const header = document.getElementById("main-header");
  if (header) {
    if (window.scrollY > 40) {
      header.classList.add("shadow-lg", "navbar-scrolled");
    } else {
      header.classList.remove("shadow-lg");
    }
  }
});


/* ==========================================================================
   THEME MANAGER (MODO OSCURO / CLARO PERSISTENTE)
   ========================================================================== */
function setupThemeManager() {
  const themeToggle = document.getElementById("theme-toggle");
  const themeToggleMobile = document.getElementById("theme-toggle-mobile");
  
  const sunIcon = document.getElementById("sun-icon");
  const moonIcon = document.getElementById("moon-icon");
  const sunIconMobile = document.getElementById("sun-icon-mobile");
  const moonIconMobile = document.getElementById("moon-icon-mobile");

  // Leer tema preferido
  const savedTheme = localStorage.getItem("nyllereth_theme") || "light";
  applyTheme(savedTheme);

  function applyTheme(theme) {
    if (theme === "dark") {
      document.documentElement.classList.add("dark");
      document.documentElement.setAttribute("data-theme", "dark");
      
      // Actualizar iconos
      if (sunIcon) sunIcon.classList.add("hidden");
      if (moonIcon) moonIcon.classList.remove("hidden");
      if (sunIconMobile) sunIconMobile.classList.add("hidden");
      if (moonIconMobile) moonIconMobile.classList.remove("hidden");
      
    } else {
      document.documentElement.classList.remove("dark");
      document.documentElement.setAttribute("data-theme", "light");
      
      // Actualizar iconos
      if (sunIcon) sunIcon.classList.remove("hidden");
      if (moonIcon) moonIcon.classList.add("hidden");
      if (sunIconMobile) sunIconMobile.classList.remove("hidden");
      if (moonIconMobile) moonIconMobile.classList.add("hidden");
    }
    
    localStorage.setItem("nyllereth_theme", theme);
  }

  function toggleTheme() {
    const isDark = document.documentElement.classList.contains("dark");
    applyTheme(isDark ? "light" : "dark");
  }

  if (themeToggle) themeToggle.addEventListener("click", toggleTheme);
  if (themeToggleMobile) themeToggleMobile.addEventListener("click", toggleTheme);
}
