<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #0E76A8;
            color: #fff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        header .img-linkedin{
            border: #ddd 1px solid;
        }

        .user-list {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .state-header {
            padding: 5px 0 5px 0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            cursor: pointer;
            color: #333;
        }

        .state-header:hover {
            background-color: #ddd;
            color: #000;
        }

        .state-header h2 {
            margin: 0;
            margin-right: 7px;
        }

        .state-details {
            display: none;
            margin-bottom: 20px;
        }

        .user-list ul {
            list-style: none;
            padding: 0;
        }

        .user-list ul li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }

        .user-header {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .user-header img {
            border-radius: 50%;
            margin-right: 20px;
        }

        .user-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .user-details {
            display: flex;
            flex-wrap: wrap;
        }

        .user-details .detail {
            flex: 1 1 300px;
            margin-bottom: 10px;
            margin-top: 10px;
            color: #777;
        }

        .user-details .detail strong {
            display: block;
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="user-list">
        <?php if (!empty($groupedUsers)): ?>
            <?php foreach ($groupedUsers as $state => $users): ?>
                <div class="state-header" onclick="toggleStateDetails(this)">
                    <h2><?php echo htmlspecialchars($state); ?></h2>
                    <span class="toggle-arrow">&#9654</span>
                </div>
                <ul class="state-details">
                    <?php foreach ($users as $user): ?>     
                        <li class="user">
                            <div class="user-header">
                                <img src="<?php echo htmlspecialchars($user['image']); ?>" alt="User Image" width="128" height="128">
                                <h1><?php echo htmlspecialchars($user['firstName'] . ' ' . $user['maidenName'] . ' ' . $user['lastName']); ?></h1>
                            </div>
                            <div class="user-details">
                                <div class="detail">
                                    <strong>Age:</strong> <?php echo htmlspecialchars($user['age']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Gender:</strong> <?php echo htmlspecialchars($user['gender']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Birth Date:</strong> <?php echo htmlspecialchars($user['birthDate']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Blood Group:</strong> <?php echo htmlspecialchars($user['bloodGroup']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Height:</strong> <?php echo htmlspecialchars($user['height']); ?> cm
                                </div>
                                <div class="detail">
                                    <strong>Weight:</strong> <?php echo htmlspecialchars($user['weight']); ?> kg
                                </div>
                                <div class="detail">
                                    <strong>Eye Color:</strong> <?php echo htmlspecialchars($user['eyeColor']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Hair:</strong> <?php echo htmlspecialchars($user['hair']['color'] . ' ' . $user['hair']['type']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Address:</strong> <?php echo htmlspecialchars($user['address']['address'] . ', ' . $user['address']['city'] . ', ' . $user['address']['state'] . ' ' . $user['address']['postalCode'] . ', ' . $user['address']['country']); ?>
                                </div>
                                <div class="detail">
                                    <strong>University:</strong> <?php echo htmlspecialchars($user['university']); ?>
                                </div>
                                <div class="detail">
                                    <strong>Company:</strong> <?php echo htmlspecialchars($user['company']['name'] . ' (' . $user['company']['department'] . ')'); ?>
                                </div>
                                <div class="detail">
                                    <strong>Role:</strong> <?php echo htmlspecialchars($user['role']); ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No users found.</p>
        <?php endif; ?>
    </div>

    <script>
        function toggleStateDetails(header) {
            const details = header.nextElementSibling;
            const arrow = header.querySelector('.toggle-arrow');
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block';
                arrow.innerHTML = '&#9660;';
            } else {
                details.style.display = 'none';
                arrow.innerHTML = '&#9654;';
            }
        }
    </script>
</body>
</html>