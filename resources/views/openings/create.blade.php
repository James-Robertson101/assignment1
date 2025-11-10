<x-layout title="Add New Opening">
  <h1>Add a New Chess Opening</h1>

  <form class="createForm"method="POST" action="/openings" enctype="multipart/form-data">
    @csrf

    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />
    </div>

    <div>
      <label for="eco_code">ECO Code:</label>
      <input type="text" id="eco_code" name="eco_code" placeholder="e.g., C60" />
    </div>

    <div>
      <label for="pgn">Moves (PGN):</label>
      <textarea id="pgn" name="pgn" rows="5" required placeholder="1. e4 e5 2. Nf3 Nc6 3. Bb5 a6"></textarea>
    </div>

    <div>
      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="3" placeholder="Optional notes about the opening"></textarea>
    </div>

    <div>
      <button type="submit">Save Opening</button>
    </div>
  </form>
</x-layout>
