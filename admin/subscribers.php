<?php
include '../includes/config.php';
include '../includes/functions.php';
session_start();
redirect_if_not_admin();

// Pagination
$limit = 20;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Get total count
$total = 0;
$result = $conn->query("SELECT COUNT(*) as count FROM subscribers");
if ($result) {
    $row = $result->fetch_assoc();
    $total = $row['count'];
}

// Get subscribers
$subscribers = [];
$result = $conn->query("SELECT * FROM subscribers ORDER BY created_at DESC LIMIT $limit OFFSET $offset");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $subscribers[] = $row;
    }
}

$total_pages = ceil($total / $limit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribers | AI Trading Signals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <main class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Subscribers</h1>
            <div>
                <span class="badge bg-primary">Total: <?php echo $total; ?></span>
            </div>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($subscribers as $subscriber): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($subscriber['name']); ?></td>
                                <td><?php echo htmlspecialchars($subscriber['email']); ?></td>
                                <td><?php echo htmlspecialchars($subscriber['company'] ?? 'N/A'); ?></td>
                                <td><?php echo htmlspecialchars($subscriber['phone'] ?? 'N/A'); ?></td>
                                <td><?php echo date('M j, Y', strtotime($subscriber['created_at'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if ($total_pages > 1): ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-4">
                        <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </main>
    
    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>