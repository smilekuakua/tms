<style>
    .calendar-body {
        padding: 20px;
    }

    .calendar-body ul {
        list-style: none;
        flex-wrap: wrap;
        display: flex;
        text-align: center;
    }

    .calendar-body .calendar-dates {
        margin-bottom: 20px;
    }

    .calendar-body li {
        width: calc(100% / 7);
        font-size: 1.07rem;
        color: #414141;
    }



    .calendar-body .calendar-weekdays li {
        cursor: default;
        font-weight: 500;
    }

    .calendar-body .calendar-dates li {
        margin-top: 30px;
        position: relative;
        z-index: 1;
        cursor: pointer;
    }

    .calendar-dates li.inactive {
        color: #aaa;
    }

    .calendar-dates li.active {
        color: #fff;
    }

    .calendar-dates li::before {
        position: absolute;
        padding: 2px;
        content: "";
        z-index: -1;
        top: 50%;
        left: 50%;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    .calendar-dates li.active::before {

        background: #023E73;
    }

    .calendar-dates li:not(.active):hover::before {
        background: #e4e1e1;
    }

    .event-date {
        background-color: #ffcc00;
        font-size: 8px;
        /* Set your desired color for event dates */
    }

    .event-date-range {
        background-color: #ffcc00;
        /* Set your desired color for the entire event period */
        color: white;
    }


    .event-form {
        margin-top: 20px;
    }

    .event-form label {
        display: block;
        margin-top: 2px;
        margin-bottom: 5px;
    }

    @media (prefers-color-scheme: dark) {
        .calendar-dates li.active {
        color:  #ffcc00;
    }
    .calendar-body li {

        color: #ffffff;
    }
    .calendar-dates li.inactive {
        color: #aaa;
    }

    }
</style>

<div class=" grid grid-cols-2 bg-primary text-center text-white uppercase p-4 font-extrabold rounded-t-2xl ">
    <span tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100    ">
        <p class="calendar-current-date"></p>
    </span>
    <div class=" calendar-navigation">
        <span id="calendar-prev">
            <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400  dark:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="15 6 9 12 15 18" />
                </svg>
            </button>
        </span>
        <span id="calendar-next">
            <button aria-label="calendar forward"
                class="focus:text-gray-400 hover:text-gray-400 ml-3  dark:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="9 6 15 12 9 18" />
                </svg>
            </button>
        </span>
    </div>
</div>
<div class="calendar-body w-ful  bg-white  dark:bg-gray-600 dark:text-gray-100">
    <ul class="calendar-weekdays w-full flex justify-cente dark:text-gray-100">
        <li class="dark:text-gray-100">Sun</li>
        <li class="dark:text-gray-100">Mon</li>
        <li class="dark:text-gray-100">Tue</li>
        <li class="dark:text-gray-100">Wed</li>
        <li class="dark:text-gray-100">Thu</li>
        <li class="dark:text-gray-100">Fri</li>
        <li class="dark:text-gray-100">Sat</li>
    </ul>
    <ul class="calendar-dates "></ul>


</div>


<script>
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();

    const day = document.querySelector(".calendar-dates");
    const currdate = document.querySelector(".calendar-current-date");
    const prenexIcons = document.querySelectorAll(".calendar-navigation span");

    const months = [
        "January", "February", "March", "April",
        "May", "June", "July", "August",
        "September", "October", "November", "December"
    ];

    const events = [];

    const manipulate = () => {
        let dayone = new Date(year, month, 1).getDay();
        let lastdate = new Date(year, month + 1, 0).getDate();
        let dayend = new Date(year, month, lastdate).getDay();
        let monthlastdate = new Date(year, month, 0).getDate();
        let lit = "";

        for (let i = dayone; i > 0; i--) {
            lit += `<li class="inactive">${monthlastdate - i + 1}</li>`;
        }

        for (let i = 1; i <= lastdate; i++) {
            let isToday = i === date.getDate() &&
                month === new Date().getMonth() &&
                year === new Date().getFullYear() ?
                "active" :
                "";

            const eventOnDate = events.find(event => event.start.getDate() <= i && event.end.getDate() >= i && event
                .start.getMonth() === month);

            let eventClass = "";
            let eventTitle = "";
            if (eventOnDate) {
                eventClass = "event-date-range";
                if (eventOnDate.start.getDate() === i) {
                    eventTitle = `<div class="event-title">${eventOnDate.title}</div>`;
                }
            }

            lit += `<li class="${isToday} ${eventClass}">${i}${eventTitle}</li>`;
        }

        for (let i = dayend; i < 6; i++) {
            lit += `<li class="inactive">${i - dayend + 1}</li>`;
        }

        currdate.innerText = `${months[month]} ${year}`;
        day.innerHTML = lit;
    }

    const addEvent = () => {
        const eventTitle = document.getElementById('eventTitle').value;
        const startDate = new Date(document.getElementById('startDate').value);
        const endDate = new Date(document.getElementById('endDate').value);

        if (!eventTitle || !startDate || !endDate || startDate > endDate) {
            alert('Please provide valid event details.');
            return;
        }


        // Get the CSRF token value from the meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        // Send AJAX request to Laravel backend
        fetch('/events', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    title: eventTitle,
                    start_date: startDate,
                    end_date: endDate,
                }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                manipulate();
            })
            .catch(error => {
                console.error('Error:', error);
            });

        events.push({
            start: startDate,
            end: endDate,
            title: eventTitle
        });
        manipulate();
    }
    manipulate();


    prenexIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            month = icon.id === "calendar-prev" ? month - 1 : month + 1;

            if (month < 0 || month > 11) {
                date = new Date(year, month, new Date().getDate());
                year = date.getFullYear();
                month = date.getMonth();
            } else {
                date = new Date();
            }

            manipulate();
        });
    });
</script>
