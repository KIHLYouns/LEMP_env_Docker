<!DOCTYPE html>
<html>

<head>
    <title>OS form</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">OS Form</h1>
            <p id="description" class="description text-center">
                Welcome to our survey form! We greatly appreciate your valuable feedback.
            </p>
        </header>
        <form id="survey-form" method="post" action="submit.php">
            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required />
            </div>
            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email"
                    required />
            </div>
            <div class="form-group">
                <label id="number-label" for="number">Age<span class="clue">(optional)</span></label>
                <input type="number" name="age" id="number" min="10" max="99" class="form-control" placeholder="Age" />
            </div>


            <div class="form-group">
                <p>Are you satisfied with the current content of the module?</p>
                <label>
                    <input name="user-recommend" value="definitely" type="radio" class="input-radio"
                        checked />Definitely</label>
                <label>
                    <input name="user-recommend" value="maybe" type="radio" class="input-radio" />Maybe</label>

                <label><input name="user-recommend" value="not-sure" type="radio" class="input-radio" />Not sure</label>
            </div>

            <div class="form-group">
                <p>
                    What would you like to see improved?
                    <span class="clue">(Check all that apply)</span>
                </p>

                <label><input name="prefer" value="Advanced_Linux_Administration" type="checkbox"
                        class="input-checkbox" />Advanced Linux Administration</label>
                <label>
                    <input name="prefer" value="Linux_Security" type="checkbox" class="input-checkbox" />Linux
                    Security</label>
                <label><input name="prefer" value="Containerization_and_Orchestration" type="checkbox"
                        class="input-checkbox" />Containerization and Orchestration</label>
                <label><input name="prefer" value="Cloud_Integration" type="checkbox" class="input-checkbox" />Cloud
                    Integration</label>
                <label><input name="prefer" value="DevOps_Practices" type="checkbox" class="input-checkbox" />DevOps
                Practices</label>

            </div>
            <div class="form-group">
                <p>How well do you feel the module prepared you for practical applications in operating system
                    environments?</p>
                <select id="os-prep" name="osPrep" class="form-control" required>
                    <option disabled selected value>Select an option</option>
                    <option value="1">Not well prepared</option>
                    <option value="2">Somewhat prepared</option>
                    <option value="3">Prepared</option>
                    <option value="4">Well prepared</option>
                    <option value="5">Very well prepared</option>
                </select>
            </div>
            <div class="form-group">
                <p>Which domain are you interested in pursuing in the future?</p>
                <select id="most-like" name="mostLike" class="form-control" required>
                    <option disabled selected value>Select an option</option>
                    <option value="DevOps">DevOps</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Cybersecurity">Cybersecurity</option>
                    <option value="Cloud Computing">Cloud Computing</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <p>Any comments or suggestions?</p>
                <textarea id="comments" class="input-textarea" name="comment"
                    placeholder="Enter your comment here..."></textarea>
            </div>

            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>

</html>