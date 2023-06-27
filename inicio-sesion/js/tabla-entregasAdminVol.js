async function loadDeliveryTable() {
    await new Promise(resolve => setTimeout(resolve, 500));
    $('#exampleEntrega').DataTable(datatTableOptions);
};

