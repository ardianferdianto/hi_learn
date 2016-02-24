package 
{
    import flash.display.Sprite;
    import flash.display.StageDisplayState;
    
    public class FullScreen extends Sprite 
    {
        public function FullScreen()
        {
            stage.displayState = StageDisplayState.FULL_SCREEN;    
        }
    }
}