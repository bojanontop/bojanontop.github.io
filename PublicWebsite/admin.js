const userDataList = document.getElementById('userDataList');

// Retrieve and display saved user data
const savedUserData = localStorage.getItem('savedUserData');
if (savedUserData) {
  const userData = JSON.parse(savedUserData);

  // Create list items for each piece of data
  Object.keys(userData).forEach(key => {
    const listItem = document.createElement('li');
    listItem.textContent = `${key}: ${userData[key]}`;
    userDataList.appendChild(listItem);
  });
}
