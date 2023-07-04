async function loadGestionTable() {
    await new Promise(resolve => setTimeout(resolve, 500));
    var tableData = (await readData("getUsersWithRole")).data;
    loadTableDataGestion(tableData, "exampleGestion");
    $('#exampleGestion').DataTable(datatTableOptions);
    await fillRoleSelect();
    setUserRole();
    setUserStatus();
    addChangeEvents();
};