<?php if (!empty($documentRequests)): ?>

    <?php foreach ($documentRequests as $request): ?>

        <div class="request-item">

            <h4>
                <?= htmlspecialchars($request['document_type']) ?>
            </h4>

            <p>
                Request ID:
                <?= htmlspecialchars($request['request_id']) ?>
            </p>

            <p>
                Date Submitted:
                <?= htmlspecialchars($request['date_submitted']) ?>
            </p>

            <p>
                Status:
                <?= htmlspecialchars($request['request_status']) ?>
            </p>

        </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>You have no submitted requests yet.</p>

<?php endif; ?>