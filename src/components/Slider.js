import React, {Component} from "react";
import Slider from "react-slick";
import Styled from 'styled-components';
import HomePageInfo from "./HomePageInfo";
import HomePagePonente from "./HomePagePonente";
function SampleNextArrow(props) {
    const { className, style, onClick } = props;
    return (
      <div
        className={className}
        style={{ ...style, display: "block", color: "#17407F", right: 25+"px" }}
        onClick={onClick}
      />
    );
  }
  
  function SamplePrevArrow(props) {
    const { className, style, onClick } = props;
    return (
      <div
        className={className}
        style={{ ...style, display: "block", color: "#17407F", left: 25+"px" }}
        onClick={onClick}
      />
    );
  }
const Wrapper =Styled.div`
    width:100%;
`;
const Page = Styled.div`
    width:100%;    
`;
const settings = {
    dots: true,
    fade: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: <SampleNextArrow />,
    prevArrow: <SamplePrevArrow />
  };
export default class SimpleSlider extends Component {
  render() {
   
    return (
        <Wrapper>
            <Slider {...settings} >
                <Page><HomePageInfo/></Page>
                <Page><HomePagePonente/></Page>
               
            </Slider>
      </Wrapper>
    );
  }
}