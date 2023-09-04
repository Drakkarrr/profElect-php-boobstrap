var favicon = document.querySelector('link[rel="shortcut icon"]');
window.isDarkMode =
  window.matchMedia &&
  window.matchMedia('(prefers-color-scheme: dark)').matches;
if (favicon && window.isDarkMode) {
  favicon.href = favicon.href.replaceAll(
    'favicon-2021-light%402x.png',
    'favicon-2021-dark%402x.png'
  );
}

JotForm.newDefaultTheme = true;
JotForm.extendsNewTheme = false;
JotForm.singleProduct = false;
JotForm.newPaymentUIForNewCreatedForms = false;
JotForm.newPaymentUI = true;
JotForm.submitError = 'jumpToFirstError';
window.addEventListener('DOMContentLoaded', function () {
  window.brandingFooter.init({
    formID: 232460894408461,
    campaign: 'powered_by_jotform_le',
    isCardForm: false,
    isLegacyForm: true,
  });
});
JotForm.init(function () {
  setTimeout(function () {
    $('input_12').hint('ex: myname@example.com');
  }, 20);
  JotForm.setPhoneMaskingValidator(
    'input_13_full',
    '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023'
  );
  if (window.JotForm && JotForm.accessible)
    $('input_5').setAttribute('tabindex', 0);

  JotForm.calendarMonths = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
  ];
  JotForm.calendarDays = [
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
  ];
  JotForm.calendarOther = { today: 'Today' };
  var languageOptions = document.querySelectorAll('#langList li');
  for (var langIndex = 0; langIndex < languageOptions.length; langIndex++) {
    languageOptions[langIndex].on('click', function (e) {
      setTimeout(function () {
        JotForm.setCalendar('14', false, {
          days: {
            monday: true,
            tuesday: true,
            wednesday: true,
            thursday: true,
            friday: true,
            saturday: true,
            sunday: true,
          },
          future: true,
          past: false,
          custom: false,
          ranges: false,
          start: '',
          end: '',
          countSelectedDaysOnly: false,
        });
      }, 0);
    });
  }
  JotForm.onTranslationsFetch(function () {
    JotForm.setCalendar('14', false, {
      days: {
        monday: true,
        tuesday: true,
        wednesday: true,
        thursday: true,
        friday: true,
        saturday: true,
        sunday: true,
      },
      future: true,
      past: false,
      custom: false,
      ranges: false,
      start: '',
      end: '',
      countSelectedDaysOnly: false,
    });
  });

  JotForm.calendarMonths = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
  ];
  JotForm.appointmentCalendarDays = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
  ];
  JotForm.calendarOther = 'Today';
  window.initializeAppointment({
    text: { text: 'Question', value: 'Preferred Interview Date ' },
    labelAlign: {
      text: 'Label Align',
      value: 'Top',
      dropdown: [
        ['Auto', 'Auto'],
        ['Left', 'Left'],
        ['Right', 'Right'],
        ['Top', 'Top'],
      ],
    },
    required: {
      text: 'Required',
      value: 'No',
      dropdown: [
        ['No', 'No'],
        ['Yes', 'Yes'],
      ],
    },
    description: { text: 'Hover Text', value: '', textarea: true },
    slotDuration: {
      text: 'Slot Duration',
      value: '60',
      dropdown: [
        [15, '15 min'],
        [30, '30 min'],
        [45, '45 min'],
        [60, '60 min'],
        ['custom', 'Custom min'],
      ],
      hint: 'Select how long each slot will be.',
    },
    startDate: { text: 'Start Date', value: '' },
    endDate: { text: 'End Date', value: '' },
    intervals: {
      text: 'Intervals',
      value: [
        {
          from: '09:00',
          to: '17:00',
          days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
        },
      ],
      hint: 'The hours will be applied to the selected days and repeated.',
    },
    useBlockout: {
      text: 'Blockout Custom Dates',
      value: 'No',
      dropdown: [
        ['No', 'No'],
        ['Yes', 'Yes'],
      ],
      hint: 'Disable certain date(s) in the calendar.',
    },
    blockoutDates: {
      text: 'Blockout dates',
      value: [{ startDate: '', endDate: '' }],
    },
    useLunchBreak: {
      text: 'Lunch Time',
      value: 'Yes',
      dropdown: [
        ['No', 'No'],
        ['Yes', 'Yes'],
      ],
      hint: 'Enable lunchtime in the calendar.',
    },
    lunchBreak: {
      text: 'Lunchtime hours',
      value: [{ from: '12:00', to: '14:00' }],
    },
    timezone: { text: 'Timezone', value: 'Europe/Istanbul (GMT+03:00)' },
    timeFormat: {
      text: 'Time Format',
      value: 'AM/PM',
      dropdown: [
        ['24 Hour', '24 Hour'],
        ['AM/PM', 'AM/PM'],
      ],
      icon: 'images/blank.gif',
      iconClassName: 'toolbar-time_format_24',
    },
    months: {
      value: [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
      ],
      hidden: true,
    },
    days: {
      value: [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
      ],
      hidden: true,
    },
    startWeekOn: {
      text: 'Start Week On',
      value: 'Sunday',
      dropdown: [
        ['Monday', 'Monday'],
        ['Sunday', 'Sunday'],
      ],
      toolbar: false,
    },
    rollingDays: { text: 'Rolling Days', value: '', toolbar: false },
    prevMonthButtonText: { text: 'Previous month', value: '' },
    nextMonthButtonText: { text: 'Next month', value: '' },
    prevYearButtonText: { text: 'Previous year', value: '' },
    nextYearButtonText: { text: 'Next year', value: '' },
    prevDayButtonText: { text: 'Previous day', value: '' },
    nextDayButtonText: { text: 'Next day', value: '' },
    appointmentType: { hidden: true, value: 'single' },
    autoDetectTimezone: { hidden: true, value: 'Yes' },
    dateFormat: { hidden: true, value: 'mm/dd/yyyy' },
    maxAttendee: { hidden: true, value: '5' },
    minScheduleNotice: { hidden: true, value: '3' },
    name: { hidden: true, value: 'preferredInterview' },
    order: { hidden: true, value: '7' },
    qid: { toolbar: false, value: 'input_15' },
    reminderEmails: {
      hidden: true,
      value: { schedule: [{ value: '2', unit: 'hour' }] },
    },
    type: { hidden: true, value: 'control_appointment' },
    useReminderEmails: { hidden: true, value: 'No' },
    id: { toolbar: false, value: '15' },
    qname: { toolbar: false, value: 'q15_preferredInterview' },
    cdnconfig: { CDN: 'https://cdn.jotfor.ms/' },
    passive: false,
    formProperties: {
      products: false,
      highlightLine: 'Enabled',
      coupons: false,
      useStripeCoupons: false,
      taxes: false,
      comparePaymentForm: '',
      paymentListSettings: false,
      newPaymentUIForNewCreatedForms: false,
      formBackground: '#fff',
      newAppointment: false,
    },
    formID: 232460894408461,
    isPaymentForm: false,
    isOpenedInPortal: false,
    isCheckoutForm: false,
    isOfflineForms: false,
    themeVersion: 'v2',
  });
  if (window.JotForm && JotForm.accessible)
    $('input_7').setAttribute('tabindex', 0);
  setTimeout(function () {
    JotForm.initMultipleUploads();
  }, 2);
});

setTimeout(function () {
  JotForm.paymentExtrasOnTheFly([
    null,
    null,
    null,
    null,
    null,
    {
      name: 'Applying_for_Position_',
      qid: '5',
      text: 'Applied Position',
      type: 'control_textbox',
    },
    null,
    {
      name: 'Cover_Letter',
      qid: '7',
      subLabel: 'Please do not exceed 200 words.',
      text: 'Cover Letter',
      type: 'control_textarea',
    },
    {
      name: 'Upload_Resume',
      qid: '8',
      text: 'Upload Resume',
      type: 'control_fileupload',
    },
    { name: '_nbsp_', qid: '9', text: 'Apply', type: 'control_button' },
    {
      name: 'clickTo',
      qid: '10',
      text: 'Job Application Form',
      type: 'control_head',
    },
    { name: 'name', qid: '11', text: 'Name', type: 'control_fullname' },
    {
      name: 'email',
      qid: '12',
      subLabel: 'example@example.com',
      text: 'E-mail',
      type: 'control_email',
    },
    {
      name: 'phoneNumber13',
      qid: '13',
      text: 'Phone Number',
      type: 'control_phone',
    },
    {
      name: 'earliestPossible',
      qid: '14',
      text: 'Earliest Possible  Start Date',
      type: 'control_datetime',
    },
    {
      name: 'preferredInterview',
      qid: '15',
      text: 'Preferred Interview Date ',
      type: 'control_appointment',
    },
    {
      name: 'anyOther',
      qid: '16',
      subLabel: 'You can share certificates, diplomas  etc.',
      text: 'Any Other Documents to Upload',
      type: 'control_fileupload',
    },
  ]);
}, 20);
