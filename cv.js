var education_count = 1;
var experience_count = 1;
var skill_count = 1;
var hobby_count = 1;

function addEducation() {
	let addEducation = document.getElementById('addEducation');
	let educationHide = document.getElementById('education_hide');
	if (education_count < 3) {
		++education_count;
		var field =
			`<div class="col-md-4 mb-3">
			<label for="college">School/College/University</label>
				<input type="text" class="form-control" id="college" name="institute${education_count}" required>
		</div>
		<div class="col-md-4 mb-3">
			<label for="degree">Degree</label>
				<input type="text" class="form-control" id="degree" name="degree${education_count}" required>
		</div>
		<div class="col-md-4 mb-3 d-flex">
			<div class="row gx-5">
					<div class="col-md-6">
						<label for="from">From</label>
						    <input type="text" class="form-control" id="from" 
							name="from${education_count}" required>
					</div>
					<div class="col-md-6">
					    <label for="to">To</label>
							<input type="text" class="form-control" id="to" 
							name="to${education_count}" required>
					</div>
			</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="cgpa">CGPA</label>
				<input type="text" class="form-control" 
				name="grade${education_count}" id="cgpa" required>
		</div>`;
		var htmlObject = document.createElement('div');
		htmlObject.className = "row d-flex";
		htmlObject.innerHTML = field;
		addEducation.insertAdjacentElement("beforeend", htmlObject);
	}
	if (education_count == 3) {
		educationHide.style = "display:none";
	}
}


function addExperience() {
	let addExperience = document.getElementById('addExperience');
	let experienceHide = document.getElementById('experience_hide');
	if (experience_count < 3) {
		++experience_count;
		var field =
			`<div class="col-md-6 mb-3">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title${experience_count}" id="title" required>
			</div>
			<div class="col-md-6 mb-3">
				<label for="description">Degree</label>
				<textarea class="form-control" id="description" name="description${experience_count}"
                placeholder="Description" required></textarea>
			</div>`;
		var htmlObject = document.createElement('div');
		htmlObject.className = "row d-flex";
		htmlObject.innerHTML = field;
		addExperience.insertAdjacentElement("beforeend", htmlObject);
	}
	if (experience_count == 3) {
		experienceHide.style = "display:none";
	}

}

function addSkill() {
	let addSkill = document.getElementById('addSkill');
	let skillHide = document.getElementById('skill_hide');
	if (skill_count < 5) {
		++skill_count;
		var field =
			`<div class="col-md-4 mb-3">
			<input type="text" class="form-control" name="skill${skill_count}" required>
		</div>`;
		var htmlObject = document.createElement('div');
		htmlObject.className = "row d-flex";
		htmlObject.innerHTML = field;
		addSkill.insertAdjacentElement("beforeend", htmlObject);
	}
	if (skill_count == 5) {
		skillHide.style = "display:none";
	}
}

function addHobby() {
	let addHobby = document.getElementById('addHobby');
	let hobbyHide = document.getElementById('hobby_hide');
	if (hobby_count < 4) {
		++hobby_count;
		var field =
			`<div class="col-md-4 mb-3">
			<input type="text" class="form-control" name="hobby${hobby_count}" id="hobbies" required>
		</div>`;
		var htmlObject = document.createElement('div');
		htmlObject.className = "row d-flex";
		htmlObject.innerHTML = field;
		addHobby.insertAdjacentElement("beforeend", htmlObject);
	}
	if (hobby_count == 4) {
		hobbyHide.style = "display:none";
	}
}

function printCV() {
	window.print();
}