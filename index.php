<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    <meta name="description" content="Local Calendar Project" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>Course Calendar <br> My Calendar Project</h1>
    </header>

    <!-- clock -->
    <div class="clock-container">
        <div id="clock"></div>
    </div>

    <!-- Calendar -->
    <div class="calendar">
        <div class="nav-btn-container">
            <button class="nav-btn">⏮️</button>
            <h2 id="monthYear" style="margin: 0"></h2>
            <button class="nav-btn">⏭️</button>
        </div>

        <div class="calendar-grid" id="calendar"></div>
    </div>

    <!-- Modal for Add/Edit/Delete Appointment -->
    <div class="modal" id="eventModal">
        <div class="modal-content">
            <div id="eventSelectorWrapper">
                <label for="eventSelector"></label>
                <select id="eventSelector">
                    <option disabled selected>Choose Event...</option>
                </select>
            </div>

            <!-- Main Form -->

            <form method="POST" id="eventForm">

                <label for="instructorName">Instructor Name: </label>
                <input type="text" name="instructor_name" id="instructorName" required>

                <label for="startDate">Start Date: </label>
                <input type="date" name="start_date" id="startDate" required>

                <label for="endDate">End Date: </label>
                <input type="date" name="end_date" id="endDate" required>

                <button type="submit">Save</button>

            </form>

            <!-- Delete Form-->

            <form method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')">

                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="event_id" id="deleteEventId">
                <button type="submit" class="submit-btn">🗑️ Delete</button>

            </form>

            <!-- Cancel -->
            <button type="button" class="submit-btn">❌ Cancel</button>


        </div>
    </div>

    <script src="calendar.js"></script>
</body>

</html>