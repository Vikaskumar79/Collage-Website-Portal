<?php
// -------------------- DATABASE CONNECTION --------------------
$servername = "localhost:3303"; // Make sure the port is correct
$username = "root"; // Your database username
$password = "Vikas@961656"; // Your database password
$dbname = "clgadmin";// Your database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Error -->" . $conn->connect_error);
} else {
    // echo"connection SuccessFull";
}

$updates = [];
if (!$conn->connect_error) {
    // Fetch notices
    $result1 = $conn->query("SELECT * FROM notices ORDER BY created_at DESC LIMIT 5");
    while ($row = $result1->fetch_assoc()) {
        $row['type'] = 'Notice';
        $updates[] = $row;
    }

    // Fetch events
    $result2 = $conn->query("SELECT * FROM events ORDER BY created_at DESC LIMIT 5");
    while ($row = $result2->fetch_assoc()) {
        $row['type'] = 'Event';
        $updates[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Latest Updates</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .latest-updates-container {
      background-color: #003366;
      color: white;
      position: relative;
      overflow: hidden;
      height: 50px;
      display: flex;
      align-items: center;
    }

    .label-fixed {
      position: absolute;
      left: 0;
      background-color: #003366;
      color: #ffcc00;
      font-weight: bold;
      padding: 0 15px;
      z-index: 2;
      height: 100%;
      display: flex;
      align-items: center;
    }

    .scrolling-wrapper {
      position: absolute;
      left: 150px;
      right: 100px;
      white-space: nowrap;
      overflow: hidden;
      height: 100%;
    }

    .updates-content {
      display: inline-block;
      padding-left: 100%;
      animation: scroll-left 20s linear infinite;
      line-height: 50px;
    }

    .updates-content.paused {
      animation-play-state: paused;
    }

    .updates-content a {
      color: white;
      text-decoration: none;
      margin-right: 50px;
      font-weight: 500;
    }

    .updates-content a:hover {
        color: #00ffff;
      /* text-decoration: underline; */
    }

    @keyframes scroll-left {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }

    .controls {
      position: absolute;
      right: 10px;
      top: 5px;
      z-index: 2;
    }

    .controls button {
      background-color: #ffffffcc;
      color: #003366;
      border: none;
      padding: 5px 10px;
      margin-left: 5px;
      border-radius: 3px;
      font-weight: bold;
      cursor: pointer;
    }

    .controls button:hover {
      background-color: white;
    }

    /* Modal */
    .modal {
      display: none;
      /* position: fixed; */
      /* z-index: 100; */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.6);
    }

    .modal-content {
      background-color: white;
      margin: 10% auto;
      padding: 20px;
      border-radius: 5px;
      width: 100%;
      max-width: 1000px;
      position: relative;
    }

    .close-modal {
      position: absolute;
      top: 1px;
      right: 11px;
      font-size: 34px;
      color: red;
      cursor: pointer;
    }

    .close-modal:hover {
      color: red;
    }

    .new-badge {
      background-color: red;
      color: white;
      font-size: 10px;
      padding: 2px 5px;
      border-radius: 3px;
      margin-left: 5px;
      font-weight: bold;
      vertical-align: super;
    }
  </style>
</head>
<body>

<div class="latest-updates-container">
  <div class="label-fixed">📢 Latest Updates:</div>
  <div class="scrolling-wrapper">
    <div class="updates-content" id="marqueeContent">
      <?php foreach ($updates as $index => $item): ?>
        <a href="#" class="notice-link" data-index="<?= $index ?>">
            <!-- <img src="images/new3.png" height="40px"> -->
            <span class="new-badge">NEW</span>
          <?= htmlspecialchars($item['title']) ?> 
        </a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="controls">
    <button id="pauseBtn">⏸</button>
    <button id="playBtn" style="display: none;">▶</button>
  </div>
</div>

<!-- Modal -->
<div id="updateModal" class="modal">
  <div class="modal-content">
    <span class="close-modal"><i class="fa-solid fa-xmark "></i></span>
    <h2 id="modalTitle"></h2>
    <p id="modalDescription"></p>
  </div>
</div>

<script>
  const notices = <?= json_encode($updates); ?>;
  const modal = document.getElementById("updateModal");
  const modalTitle = document.getElementById("modalTitle");
  const modalDescription = document.getElementById("modalDescription");
  const closeModal = document.querySelector(".close-modal");

  document.querySelectorAll(".notice-link").forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      const index = this.getAttribute("data-index");
      const notice = notices[index];
      modalTitle.textContent = `${notice.title} (${notice.type})`;
      modalDescription.innerHTML = notice.description.replace(/\n/g, "<br>");
      modal.style.display = "block";
    });
  });

  closeModal.onclick = () => modal.style.display = "none";
  window.onclick = (e) => {
    if (e.target === modal) modal.style.display = "none";
  };

  const marquee = document.getElementById("marqueeContent");
  const pauseBtn = document.getElementById("pauseBtn");
  const playBtn = document.getElementById("playBtn");

  pauseBtn.addEventListener("click", () => {
    marquee.classList.add("paused");
    pauseBtn.style.display = "none";
    playBtn.style.display = "inline-block";
  });

  playBtn.addEventListener("click", () => {
    marquee.classList.remove("paused");
    playBtn.style.display = "none";
    pauseBtn.style.display = "inline-block";
  });
</script>

</body>
</html>
