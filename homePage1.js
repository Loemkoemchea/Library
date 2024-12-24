const khmerDays = ["អាទិត្យ", "ចន្ទ", "អង្គារ", "ពុធ", "ព្រហស្បតិ៍", "សុក្រ", "សៅរ៍"];

const khmerMonths = ["មករា", "កម្ភៈ", "មីនា", "មេសា", "ឧសភា", "មិថុនា", "កក្កដា", "សីហា", "កញ្ញា", "តុលា", "វិច្ឆិកា", "ធ្នូ"];

const khmerNumbers = ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];

function convertToKhmerNumber(number) {
    return number.toString().split('').map(digit => khmerNumbers[digit]).join('');
}

function getCurrentDateInKhmer() {
    const date = new Date();
    const dayName = khmerDays[date.getDay()]; 
    const day = convertToKhmerNumber(date.getDate()); 
    const monthName = khmerMonths[date.getMonth()];
    const year = convertToKhmerNumber(date.getFullYear()); 
    return `ថ្ងៃ ${dayName}, ${day} ខែ ${monthName} ឆ្នាំ ${year}`;
}

function getCurrentTimeInKhmer() {
    const date = new Date();
    const hours = convertToKhmerNumber(date.getHours()).padStart(2, '0');
    const minutes = convertToKhmerNumber(date.getMinutes()).padStart(2, '0');
    const seconds = convertToKhmerNumber(date.getSeconds()).padStart(2, '0');
    return `${hours}:${minutes}:${seconds}`;
}

function updateDateTime() {
    const dateElement = document.getElementById('date');
    const timeElement = document.getElementById('clock');
    
    dateElement.textContent = getCurrentDateInKhmer();
    timeElement.textContent = getCurrentTimeInKhmer();
}

window.onload = function() {
    updateDateTime();
    setInterval(updateDateTime, 1000);
};

