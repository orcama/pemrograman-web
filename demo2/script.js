const taskInput = document.getElementById('task-input');
const taskList = document.getElementById('task-list');

// Fungsi menambahkan task
function addTask() {
  const taskText = taskInput.value;

  if (taskText === '') {
    alert('Please enter a task');
    return;
  }

  // Membuat elemen list baru
  const li = document.createElement('li');
  const span = document.createElement('span');
  span.textContent = taskText;

  // Tombol delete
  const deleteBtn = document.createElement('button');
  deleteBtn.textContent = '🗑';
  deleteBtn.classList.add('delete');
  deleteBtn.onclick = () => deleteTask(li);

  // Tombol edit
  const editBtn = document.createElement('button');
  editBtn.textContent = '✏';
  editBtn.onclick = () => editTask(li, span);

  // Tambahkan elemen ke list item
  li.appendChild(span);
  li.appendChild(editBtn);
  li.appendChild(deleteBtn);

  // Tambahkan list item ke task list
  taskList.appendChild(li);

  // Kosongkan input setelah menambahkan task
  taskInput.value = '';
}

// Fungsi untuk menghapus task
function deleteTask(task) {
  taskList.removeChild(task);
}

// Fungsi untuk mengedit task
function editTask(task, span) {
  const newTaskText = prompt('Edit your task:', span.textContent);
  if (newTaskText !== null && newTaskText.trim() !== '') {
    span.textContent = newTaskText;
  }
}
