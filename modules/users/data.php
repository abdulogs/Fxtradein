<?php
require_once "../../classes/app.php";
require_once "../../classes/database.php";

if (!isset($_POST) and $_SERVER['REQUEST_METHOD'] == !"POST") {
  echo '<tr colspan="12"><td>Something went wrong</td></tr>';
} else {

  $limit = (isset($_POST["limit"])) ? $_POST["limit"] : 5;
  $page = (isset($_POST["page"])) ? $_POST["page"] : 1;


  /*** Fetching all data ***/
  $users = DB::columns(["id", "first_name", "last_name", "email", "phone", "about","status"]);
  $users = DB::columnsmore(["balance","role","verified","created_at","updated_at"]);
  $users = DB::table("users");

  /*** Search all data ***/


if(isset($_POST["search"])){
  $users =  DB::search([
    "first_name" => app::post("search"),
    "last_name" => app::post("search"),
    "email" => app::post("search"),
    "phone" => app::post("search"),
    "about" => app::post("search"),
  ]);
}

  /*** sort all data ***/
  if (!isset($_POST["sort"])) {
    $users = DB::order("id", "DESC");
  } else if($_POST["sort"] == "recent") {
    $users = DB::order("id", "DESC");
  } else if($_POST["sort"] == "oldest") {
    $users = DB::order("id", "ASC");
  }

  $users = ($limit == "all") ?: DB::paging($page, $limit);
  $users = DB::execute();
  $users = DB::fetch("all");
 
  if ($users) {
    foreach ($users as $user) { ?>
      <tr>
        <td class="align-middle px-3" data-label="Id">
          <?php echo $user["id"]; ?>
        </td>
        <td class="align-middle text-break" data-label="Fullname">
          <?php echo ucFirst($user["first_name"])." ". ucFirst($user["last_name"]); ?>
        </td>
        <td class="align-middle text-break" data-label="Email">
          <?php echo $user["email"]; ?>
        </td>
        <td class="align-middle text-break" data-label="Phone">
          <?php echo (empty($user["phone"])) ? "<span class='badge badge-danger'>N/A</span>" : $user["phone"] ;?>
        </td>
        <td class="align-middle text-break" data-label="About">
        <?php echo (empty($user["about"])) ? "<span class='badge badge-danger'>N/A</span>" : $user["about"] ;?>
        </td>
        <td class="align-middle text-break" data-label="Balance">
          <?php echo $user["balance"]; ?>
        </td>
        <td class="align-middle text-break" data-label="Verified">
          <?php echo ($user["verified"] == 0) ? "<span class='badge badge-danger'>Not verified</span>" : "<span class='badge badge-success'>Verified</span>" ;?>
        </td>
        <td class="align-middle text-break" data-label="Role">
          <?php echo ($user["role"] == 0) ? "<span class='badge badge-dark'>Subscriber</span>" : "<span class='badge badge-info'>Admin</span>" ;?>
        </td>
        <td class="align-middle text-break" data-label="Status">
          <?php echo ($user["status"] == 0) ? "<span class='badge badge-danger'>Inactive</span>" : "<span class='badge badge-success'>Active</span>" ;?>
        </td>
        <td class="align-middle text-break" data-label="Created at">
          <?php echo date('F d, Y H:i:s A', strtotime($user["created_at"])); ?>
        </td>
        <td class="align-middle text-break" data-label="Updated at">
          <?php echo date('F d, Y H:i:s A', strtotime($user["updated_at"])); ?>
        </td>
        <td class="align-middle px-3" scope="row" data-label="Controls">
          <a class="updateBtn ti-pencil mr-1 font-16 text-success" data-id="<?php echo $user["id"]; ?>" href="javascript:void(0)" title="View"></a>
          <a class="deleteBtn ti-trash mr-1 font-16 text-danger" data-id="<?php echo $user["id"]; ?>" href="javascript:void(0)" title="Delete"></a>
        </td>
      </tr>

    <?php } ?>
    <tr id="loader"></tr>

    <?php if ($limit == "all") : ?>
    <?php else : ?>
      <tr id="pagination" class="bg-light">
        <td colspan="12" class="text-center">
          <?php $attr = (isset($_POST["sort"]) || isset($_POST["limit"]) || isset($_POST["search"])) ? "loadFiltered" : "loadmore"; ?>
          <button type="button" class="btn btn-sm btn-light border" id="<?php echo $attr; ?>" data-paging="<?php echo $page + 1; ?>">
            Load More
          </button>
        </td>
      </tr>
    <?php endif; ?>

  <?php } else { ?>
    <tr class="bg-light">
      <td colspan="12" class="text-center">
        <button type="button" class="btn btn-sm btn-outline-dark" disabled>No Results</button>
      </td>
    </tr>
<?php }
} ?>