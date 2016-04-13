<div class="row">
    <div class="col-md-12">
        <h3>Players</h3>
        <table class="table table-striped">
            <thead>
            <td>Avatar</td>
            <td>Player</td>
            <td>Cash</td>
            <td>Equity</td>
            <td></td>
            </thead>
            {playerList}
            <tr>
                <td><img class="avatarDashBoard" src="../data/avatar/{Avatar}"></td>
                <td><a href="/portfolio/{Player}">{Player}</a></td>
                <td>{Cash}</td>
                <td>{Equity}</td>
                <td><a href="/playerManagement/editPlayer/{Player}">Edit</a> | <a href="/playerManagement/deletePlayer/{Player}">Delete</a></td>
            </tr>
            {/playerList}
        </table>
    </div>
 </div>