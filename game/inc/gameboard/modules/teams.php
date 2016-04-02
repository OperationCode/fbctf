<?hh

require_once($_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php');

sess_start();
sess_enforce_login();

class TeamModuleController {
  public function render(): :xhp {
    return
      <div>
        <header class="module-header">
          <h6>Teams</h6>
        </header>
        <div class="module-content">
          <div class="fb-section-border">
            <div class="module-top">
              <div class="radio-tabs">
                <input type="radio" name="fb--module--teams" id="fb--module--teams--all" checked={true}/>
                <label for="fb--module--teams--all" class="click-effect"><span>Everyone</span></label>
                <input type="radio" name="fb--module--teams" id="fb--module--teams--your-team"/>
                <label for="fb--module--teams--your-team" class="click-effect"><span>Your Team</span></label>
              </div>
            </div>
            <div class="module-scrollable">
              <ul class="grid-list"></ul>
            </div>
          </div>
        </div>
      </div>;
  }
}

$teams_generated = new TeamModuleController();
echo $teams_generated->render();